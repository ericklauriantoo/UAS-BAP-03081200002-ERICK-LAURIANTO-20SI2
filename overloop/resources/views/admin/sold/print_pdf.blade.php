<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Overloop Sold Product Report PDF</title>
</head>
<body>
  <p style="text-align:center"><img alt="" src="https://upload.wikimedia.org/wikipedia/id/thumb/d/d8/UPH_LOGO.svg/1200px-UPH_LOGO.svg.png" style="height:182px; width:300px" /></p>

<h2 style="text-align:center"><span style="font-size:22px"><strong><span style="font-family:Arial,Helvetica,sans-serif">OVERLOOP&#39;S SOLD PRODUCT REPORT</span></strong></span></h2>

<h2 style="text-align:center"><span style="font-size:16px"><strong><span style="font-family:Arial,Helvetica,sans-serif">Erick Laurianto | 03081200002 | 20SI2 | Business Application Programming</span></strong></span></h2>

<p>&nbsp;</p>

<table align="center" border="5" cellpadding="1" cellspacing="2" style="width:100%">
	<tbody>
		<tr>
			<td style="text-align:center;"><span style="font-family:Arial,Helvetica,sans-serif"><strong>NO</strong></span></td>
			<td style="text-align:center;"><strong>CUSTOMER NAME</strong></td>
			<td style="text-align:center;"><strong>PRODUCT</strong></td>
			<td style="text-align:center;"><strong>CATEGORY</strong></td>
			<td style="text-align:center;"><strong>SIZE</strong></td>
			<td style="text-align:center;"><strong>LOOPKEY</strong></td>
		</tr>
    @foreach($sold as $item)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->product }}</td>
      <td>{{ $item->category }}</td>
      <td>Size {{ $item->size }}</td>
      <td>{{ $item->loopkey }}</td>
    </tr>
    @endforeach
	</tbody>
</table>

<p>&nbsp;</p>

<p style="text-align:center">Property of Overloop Indonesia.</p>

<p style="text-align:center">Created By : <strong><a href="https://www.instagram.com/ericklaurianto_/"><span style="color:#2c3e50">Erick Laurianto</span></a></strong></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

</body>
</html>