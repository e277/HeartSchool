<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class XmlController extends Controller
{
    public function createXml() {

        $result = Student::all();

        if ($result) {

            $xml = new DOMDocument("1.0");
        // $xml = new \XMLWriter();
            // It will format the output in xml format otherwise
            // the output will be in a single row
            $xml->formatOutput = true;
            $stony_hill = $xml->createElement("students");
            $xml->appendChild($stony_hill);

            while ($row = mysqli_fetch_array($result)) {
                $student = $xml->createElement("student");
                $stony_hill->appendChild($student);

                $id = $xml->createElement("id", $row['id']);
                $student->appendChild($id);

                $name = $xml->createElement("name", $row['name']);
                $student->appendChild($name);

                $email = $xml->createElement("email", $row['email']);
                $student->appendChild($email);

                $password = $xml->createElement("password", $row['password']);
                $student->appendChild($password);

                $code = $xml->createElement("code", $row['code']);
                $student->appendChild($code);

                $status = $xml->createElement("status", $row['status']);
                $student->appendChild($status);

                $usertype = $xml->createElement("usertype", $row['usertype']);
                $student->appendChild($usertype);
            }
        //     // echo "<xmp>" . $xml->saveXML() . "</xmp>";
            // $xml->save("student.xml");
            Storage::put('student.xml',$contents);
        }

        

    }

    public function readXml() {
        $xmlString = file_get_contents(public_path('student.xml'));
        $xmlObject = simplexml_load_string($xmlString);

        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);

        dd($phpArray);
    }

    public function downloadXml() {
        $pathToFile = public_path("student.xml");
        $headers = ['content-Type: application/xml'];
        $name = time().'xml';

        return response()->download($pathToFile, $name, $headers);
    }
}
