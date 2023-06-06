<!DOCTYPE html>
<html>
    <head>
    <title>@yield('invoices')</title>
    <link rel="stylesheet" href="{{ sc_file('admin/LTE/dist/css/invoices.css')}}">
    </head>

<body>
<div id="container">
<table style="position:absolute;left:22px;top:128px;width:964px;height:460px;z-index:0;" id="Table1">
<tr>
<td class="cell0"><p><span style="font-size:13px;line-height:16px;">&nbsp;</span>Sender Name &amp; Address / Nom et adresse de l'expediteur</p>
<br>
<p> &nbsp;&nbsp;Cloth compagny INC<br/>&nbsp;&nbsp;259 Blvd. Sir-Wilfrid-Laurier</p>
<p> &nbsp;&nbsp;Saint-Basile-le-Grand, QC J3N 1A9</p>
<p> &nbsp;&nbsp;CANADA </p></td>
<td colspan="2" class="cell1"><p><span style="font-size:13px;line-height:16px;">&nbsp;</span>Receiver Name &amp; Address / Nom et adresse du destinataire</p>
<br>
<span class="text-sm text-grey-m2 align-middle">&nbsp;&nbsp;{{ $name }}<br/></span>
<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;{{ $address1 }},<br/>&nbsp;&nbsp;{{ $address2 }},<br/>&nbsp;&nbsp;{{ $address3 }}{{$province . ', '}}{{ $country }}
</tr>
<tr>
<td class="cell2"><p style="font-size:13px;line-height:16px;">&nbsp;<span style="font-size:12px;line-height:13.5px;">Contact Name / Nom de la personne - {{$company}}</span></p></td>
<td colspan="2" class="cell3"><p><span style="font-size:13px;line-height:16px;">&nbsp;</span>Contact Name / Nom de la personne - {{$name}}</p></td>
</tr>
<tr>
<td class="cell2"><p><span style="font-size:13px;line-height:16px;">&nbsp;</span>Telephone Number / Numero de téléphone </p>
<br>
<p> &nbsp;&nbsp;5145558301 </p></td>
<td colspan="2" class="cell3"><p>&nbsp;Telephone Number / Numero de téléphone </p>
<br>
<div class="my-1"><i class="fas fa-phone-alt"></i> &nbsp;{{ $phone }}</div></td>
</tr>
<tr>
<td class="cell4"><p>&nbsp;Sender Reference / Référence de l'expéditeur</p></td>
<td colspan="2" class="cell5"><p><span style="font-size:13px;line-height:16px;">&nbsp;</span>Tax Id/IRS/VAT No. Receiver&nbsp; / Tax ID/IRS/No. du receveur TVA</p></td>
</tr>
<tr>
<td class="cell6"><p><span style="font-size:13px;line-height:16px;">&nbsp;</span>Reason for Export / Raison de l'exportation</p>
<p style="font-size:13px;line-height:16px;">&nbsp;</p>
<p style="font-size:13px;line-height:16px;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:13px;line-height:16px;">&nbsp;<span style="font-size:12px;line-height:13.5px;">Number of Packages / Nombre de colis</span> <br/><span style="margin-left: 20%"> {{$number_package}}</span></p></td>
<td class="cell8"><p>Gross Weight / Poids brut</p> <p style="margin-left: 20%">{{$total_weight}}</p></td>
</tr>
<tr>
<td colspan="3" class="cell9"><p>&nbsp;&nbsp;<span style="font-size:12px;line-height:13.5px;">Additional Information&nbsp; /&nbsp; Information additionelle</span></p>
<br>
<p style="font-family:Arial;">&nbsp; Licence No. / No de licence&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Certificate No. No. de certificat&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Invoice: {{$id}}</p></td>
</tr>
</table>
<table style="position:absolute;left:23px;top:588px;width:963px;z-index:1;" id="Table2">
<tr>
<td class="cell0"><p>Quantity</p>
<p>Quantité</p></td>
<td class="cell1"><p style="text-align: center">Description of Contents</p>
<p style="text-align: center">Description du contenu</p></td>
<td class="cell2"><p>HS Tariff Code</p>
<p style="font-size:12px;line-height:13.5px;"><span style="font-size:11px;line-height:12px;">Code tarif SH</span></p></td>
<td class="cell2"><p>Country of Origin</p>
<p>Pay d'origine</p></td>
<td class="cell3"><p>Net Weight (kg)</p>
<p style="font-size:13px;line-height:16px;"><span style="font-size:12px;line-height:13.5px;">Poid net (kg)</span></p></td>
<td class="cell4"><p>Total Value</p>
<p style="font-size:13px;line-height:16px;"><span style="font-size:12px;line-height:13.5px;">Valeur totale</span></p></td>
</tr>
    @foreach ($details as $detail)
        <tr>
            <td class="cell0">{{ $detail['qty'] }}</td>
            <td class="cell0">{{ $detail['name'] }}</td>
            <td class="cell0"></td> <!-- HS Tariff Code -->
            <td class="cell0"></td> <!--Country of Origin -->
            <td class="cell0">{{ $detail['weight'] }}</td> <!--Net Weight (kg) -->
            <td class="cell0">{{ number_format($detail['price']) }}</td>
        </tr>
    @endforeach
<tr>
<td colspan="2" class="cell9"><p style="margin:0 0 0 504px;font-family:Arial;font-size:13px;line-height:16px;"><span style="font-family:arial;font-size:16px;line-height:18px;font-weight:bold;">&nbsp;</span><span style="font-family:arial;font-size:16px;line-height:18px;font-weight:bold;">&nbsp; TOTAL</span></p></td>
<td colspan="3" class="cell10"><p style="margin:0 0 0 180px;">{{$tax}} Currency &amp; Value</p>
<p style="margin:0 0 0 180px;font-family:Arial;font-size:13px;line-height:16px;"><span style="font-family:arial;font-size:11px;line-height:12px;">Device et valeur</span></p></td>
<td class="cell11"><p style="font-size:13px;line-height:16px;">{{$total_price}}</p></td>
</tr>
</table>
<table style="position:absolute;left:20px;top:0px;width:968px;height:56px;z-index:2;" id="Table3">
<tr>
<td class="cell0"><p style="font-size:13px;line-height:16px;">&nbsp;</p>
<p style="font-size:21px;line-height:24.5px;font-weight:bold;">COMMERCIAL INVOICE /&nbsp;&nbsp; &nbsp;&nbsp; FACTURE COMMERCIAL</p></td>
</tr>
</table>
<table style="position:absolute;left:27px;top:1094px;width:959px;height:145px;z-index:3;" id="Table4">
<tr>
<td class="cell0"><br>
<p> I, the undersigned exporter of goods, certify that the particulars given in this invoice</p>
<p> declaration are true and correct to the best of my knowledge and items do not</p>
<p> contain any damgerous or phroibited articles as stated in the General Conditions of Carriage&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </p>
<br>
<p style="font-size:13px;line-height:16px;font-weight:bold;"> Signature </p>
<p style="font-size:13px;line-height:16px;font-weight:bold;">&nbsp;</p>
<p><span style="font-size:13px;line-height:16px;font-weight:bold;">&nbsp; ______________________________________________________</span></p></td>
<td class="cell1"><br>
<p> Je,soussigné. l'exportateur des marchandise, atteste que l'information fournie <br/> sur la presente déclaration relative à la facture est verfidique et correcte et<br/> que le colis ne contient pas de marchandises dangereuses ou prohibées,</p>
<p> conformément aux condifitons générales.</p>
<br>
<p style="font-size:13px;line-height:16px;">&nbsp;</p>
<p style="font-size:13px;line-height:16px;font-weight:bold;">&nbsp; Date</p>
<p style="font-size:13px;line-height:16px;font-weight:bold;">&nbsp; </p>
<p style="font-size:13px;line-height:16px;font-weight:bold;">&nbsp; ______________________________________________________</p></td>
</tr>
</table>
</body>
</html>