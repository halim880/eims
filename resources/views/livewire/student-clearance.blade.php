<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <title>Clearance Form</title>

    <style>

        body{
            width: 1000px;
            position: relative;
        }

        table {
            border-spacing: 0px;
            table-layout: fixed;
            width: 100%;
        }
        table, th, td {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 3px 10px;
        }

        .principal{
            /* display: ; */
            position: absolute;
            bottom: 20px;
            right: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <button style="border: none" onclick="print()">print</button>
        <div>
            <h1 style="text-align: center">Sylhet Engineering College</h1>
            <h3 style="text-align: center">Student Clearance Form</h3>
            <div>
                <p style="text-align: center">
                    Name : <span style="font-weight: bold">{{Auth::user()->name}}</span>
                    Reg. : <span style="font-weight: bold">{{Auth::user()->student->id}}</span>
                    Dept. : <span style="font-weight: bold">{{Auth::user()->student->department_name}}</span>
                    Session : <span style="font-weight: bold">{{Auth::user()->student->session->name}}</span>
                </p>
            </div>
        </div>
        <table id="table-test">
            <thead>
                <th width="5">Department</th>
                <th width="3">Lab/Shop</th>
                <th width="2">Due/Payable</th>
                <th width="2">Craft Instructor</th>
                <th width="3">Department Head</th>
                <th width ="5">Remarks</th>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="6">Computer Science and Engineering</td>
                    <td>Software 1</td>
                    <td> 0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked></td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td>Clear</td>
                </tr>
                <tr>
                    <td>Software 2</td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td>Clear</td>
                </tr>
                <tr>
                    <td>DLD</td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td>Clear</td>
                </tr>
                <tr>
                    <td>Microprocessor</td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td>Clear</td>
                </tr>
                <tr>
                    <td>Networking</td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td>Clear</td>
                </tr>
                <tr>
                    <td>ATTS</td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td>Clear</td>
                </tr>
    
                {{-- Civil Department --}}
                <tr>
                    <td rowspan="3">Civil Engineering</td>
                    <td></td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="3">Electrical & Electronics Engineering</td>
                    <td></td>
                    <td>0</td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="4">Others </td>
                    <td>Physics Lab</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Chemistry Lab</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Machine shop</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Welding shop</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    
        <h3>General</h3>
        <table>
            <thead>
                <th width="200">Department</th>
                <th>Due/Payable</th>
                <th>incharge</th>
                <th>Officer in charge</th>
                <th>Remarks</th>
            </thead>
            <tbody>
                <tr>
                    <td>Safety Department</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" disabled> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Library</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>General Branch</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Accountant</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>General Store</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Transport</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Office of Hostel Provost</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Central Computer Lab</td>
                    <td></td>
                    <td align="center"><input type="checkbox" name="" id="" checked> </td>
                    <td align="center"><input type="checkbox" name="" id=""></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    
        <div style="height: 200px"></div>
    
        <div class="principal">
            <p>Principal <br>
            Sylhet Engineering College, <br> Sylhet</p>
        </div>
    </div>
</body>
</html>

