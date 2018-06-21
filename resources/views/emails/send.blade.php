<html>
<head></head>
<body>
<h1 style="text-align: center;">New request for proposal from {{$data['Company_Name']}}</h1>
<table style="width: 389px;">
<tbody>
<tr>
<td style="width: 178px;"><span style="background-color: #000000;color:white">contact Infos</span></td>
<td style="width: 195px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 178px;">Full name</td>
<td style="width: 195px;">{{$data['First_Name']}} {{$data['Last_Name']}}</td>
</tr>
<tr>
<td style="width: 178px;">Job Title</td>
<td style="width: 195px;">{{$data['Job_Title']}}</td>
</tr>
<tr>
<td style="width: 178px;">Phone Number</td>
<td style="width: 195px;">+{{$data['Country_code']}} {{$data['Phone_Number']}}</td>
</tr>
<tr>
<td style="width: 178px;">E-mail</td>
<td style="width: 195px;">{{$data['Email']}}</td>
</tr>
<tr>
<td style="width: 178px;"><span style="background-color: #000000;color:white">Company Infos</span></td>
<td style="width: 195px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 178px;">Company name</td>
<td style="width: 195px;">{{$data['Company_Name']}}</td>
</tr>
<tr>
<td style="width: 178px;">Company Adress</td>
<td style="width: 195px;">{{$data['Company_Adress']}} || Zip Code: {{$data['Zip_Code']}}</td>
</tr>
<tr>
<td style="width: 178px;"><span style="background-color: #000000;color:white">Project Infos</span></td>
<td style="width: 195px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 178px;">Project City</td>
<td style="width: 195px;">{{$data['PCity']}}</td>
</tr>
<tr>
<td style="width: 178px;">Exhibition</td>
<td style="width: 195px;">{{$data['Exhibition']}}</td>
</tr>
<tr>
<td style="width: 178px;">Budget</td>
<td style="width: 195px;">{{$data['Budget']}} {{$data['Currency']}}</td>
</tr>
<tr>
<td style="width: 178px;">Details</td>
<td style="width: 195px;">{{$data['details']}}</td>
</tr>
</tbody>
</table>

</body>
</html>