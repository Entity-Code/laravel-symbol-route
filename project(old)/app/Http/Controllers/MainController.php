<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showHome() {   
        return view("/pages.home");
    }
    public function showBlog() {
        return view("/pages.blog");
    }
    public function showAbout() {
        return view("/pages.about");
    }

    public function control() {
        $users = [
            [
                'name' => 'name1',
                'lastname' => 'lastname1'
            ],

            [
                'name' => 'name2',
                'lastname' => 'lastname2'
            ],
            [
                'name' => 'name3',
                'lastname' => 'lastname3'
            ],

            [
                'name' => 'name4',
                'lastname' => 'lastname4'
            ],
            
        ];
        
        // dd($users)
        return view('pages.control', compact('users'));

        
    }

    public function snake1(){
        
        $users = [
            [
                "id" => "31","name" => "Elizabeth",
                "lastname" => "Romaguera",
                "date_of_birth" => "2005-03-12 10:37:05",
                "document_type" => "CI",
                "document_number" => "838-743-2106 x4269",
                "created_at" => "2018-05-28 13:40:27",
                "updated_at" => "2018-05-28 13:40:27"
            ],
            ["id" => "32","name" => "Madie","lastname" => "Sanford","date_of_birth" => "1964-04-02 17:51:08","document_type" => "CI","document_number" => "+1-543-639-8712","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "33","name" => "Orion","lastname" => "Hilpert","date_of_birth" => "1975-06-30 18:04:07","document_type" => "Driver License","document_number" => "424.999.8375 x49210","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "34","name" => "Lysanne","lastname" => "Buckridge","date_of_birth" => "1960-01-25 05:59:53","document_type" => "CI","document_number" => "886.221.5466 x374","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "35","name" => "Jessie","lastname" => "Kozey","date_of_birth" => "1982-06-05 06:00:13","document_type" => "CI","document_number" => "468.469.5883","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "36","name" => "Shemar","lastname" => "Keeling","date_of_birth" => "1957-06-14 11:43:50","document_type" => "CI","document_number" => "721-324-9086 x042","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "37","name" => "Edwardo","lastname" => "Pacocha","date_of_birth" => "1959-03-29 01:01:36","document_type" => "CI","document_number" => "1-743-362-6164","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "38","name" => "Delilah","lastname" => "Renner","date_of_birth" => "1922-11-05 18:13:56","document_type" => "Driver License","document_number" => "841.324.4824 x198","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "39","name" => "Jacquelyn","lastname" => "Ankunding","date_of_birth" => "1992-11-19 06:15:10","document_type" => "CI","document_number" => "1-732-298-9263","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "40","name" => "Willie","lastname" => "Borer","date_of_birth" => "1926-12-17 17:48:37","document_type" => "CI","document_number" => "247.970.3935 x1106","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "41","name" => "Tristian","lastname" => "Koss","date_of_birth" => "2003-01-27 03:01:13","document_type" => "Driver License","document_number" => "1-827-946-6491 x7524","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "42","name" => "Kamron","lastname" => "Murphy","date_of_birth" => "2002-12-17 15:29:31","document_type" => "CI","document_number" => "267.993.2963 x05234","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "43","name" => "Helene","lastname" => "Hansen","date_of_birth" => "2000-02-24 12:21:08","document_type" => "Driver License","document_number" => "+1-964-705-7555","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "44","name" => "Charley","lastname" => "Abernathy","date_of_birth" => "1930-04-24 00:12:40","document_type" => "CI","document_number" => "985.370.0304","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "45","name" => "Dion","lastname" => "Leannon","date_of_birth" => "1993-09-22 15:41:21","document_type" => "Driver License","document_number" => "1-326-694-2607","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "46","name" => "Zelda","lastname" => "Johns","date_of_birth" => "1953-04-03 20:58:01","document_type" => "Driver License","document_number" => "285.344.1948","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "47","name" => "Hadley","lastname" => "Collins","date_of_birth" => "1947-06-04 11:31:03","document_type" => "Driver License","document_number" => "+1-514-312-2554","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "48","name" => "Emilie","lastname" => "Grant","date_of_birth" => "2010-12-18 14:22:44","document_type" => "Driver License","document_number" => "719-908-6475","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "49","name" => "Deron","lastname" => "Hand","date_of_birth" => "1953-08-06 18:27:40","document_type" => "Driver License","document_number" => "+14688925868","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "50","name" => "Laurence","lastname" => "Green","date_of_birth" => "2008-12-25 13:42:07","document_type" => "Driver License","document_number" => "(302) 697-0481 x65340","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "51","name" => "Adriana","lastname" => "Abernathy","date_of_birth" => "1952-06-01 03:28:30","document_type" => "Driver License","document_number" => "953.949.4537 x603","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "52","name" => "Tyrel","lastname" => "Murphy","date_of_birth" => "1977-03-02 10:51:34","document_type" => "CI","document_number" => "1-620-470-6907","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "53","name" => "Dandre","lastname" => "Kautzer","date_of_birth" => "1988-05-22 08:37:49","document_type" => "Driver License","document_number" => "1-257-565-5268 x0572","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "54","name" => "Arlo","lastname" => "Keeling","date_of_birth" => "1924-03-09 05:05:51","document_type" => "Driver License","document_number" => "480-402-1713","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "55","name" => "Nikita","lastname" => "Donnelly","date_of_birth" => "2001-12-26 02:54:30","document_type" => "Driver License","document_number" => "(682) 794-3218","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "56","name" => "Gillian","lastname" => "Reichel","date_of_birth" => "2000-09-01 03:03:09","document_type" => "CI","document_number" => "+1-751-368-6085","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "57","name" => "Briana","lastname" => "Cartwright","date_of_birth" => "1926-01-21 14:47:47","document_type" => "CI","document_number" => "540.302.1002 x294","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "58","name" => "Shirley","lastname" => "Brakus","date_of_birth" => "1951-08-19 19:37:29","document_type" => "Driver License","document_number" => "1-471-981-2812","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "59","name" => "Lamar","lastname" => "Koch","date_of_birth" => "1983-08-29 16:27:17","document_type" => "CI","document_number" => "(492) 531-7248 x513","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
            ["id" => "60","name" => "Lafayette","lastname" => "Brakus","date_of_birth" => "1955-09-02 02:12:26","document_type" => "CI","document_number" => "351.512.4630 x454","created_at" => "2018-05-28 13:40:27","updated_at" => "2018-05-28 13:40:27"],
        ];

        /*
        //FILTRO
        $ospitiRes = [];

        foreach ($ospiti as $ospite) {

            $name = $ospite['name'];

            if (strpos($name, 'm') !== false) {

                $ospitiRes[] = $ospite;

            }
        }

        $ospiti = $ospitiRes;
        
        dd($ospitiRes);
        */
        
        return view('pages.snake-1', compact('users'));
    }

    
}
 