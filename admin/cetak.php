<?php  
require '../functions.php'; 
$id = $_GET["id"];
$transaksi = query("SELECT * FROM tb_transaksi WHERE id = '$id'")[0];

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>.:: Laporan Pemasukan Harian Laundry ::.</title>
    <style type="text/css">

        #judul {
           width:100%;
           margin-bottom:20px;
           text-align:center;
       }

   </style>
   <link href="assets/css/style.default.css" rel="stylesheet" type="text/css" />
   <div id='contentwrapper' class='contentwrapper'>
    <div id="judul">
        <br />
        <br />
        <font size="+2">LAPORAN PEMASUKAN HARIAN LAUNDRY </font><br />
        JL. Kalibata Selatan No. 36 Jakarta Selatan<br />
        Hp.  085694871343 Email : aneka_web@yahoo.co.id Website : www.anekaweb.com

        <hr color="#eee" />   </div>
        <table cellpadding='0' cellspacing='0' border='0' class='stdtable' id='dyntable2'>
         <colgroup>
             <col class='con0' style='width: 4%' />
             <col class='con1' />
             <col class='con0' />
             <col class='con1' />
             <col class='con0' />
         </colgroup>
         <thead>
            <tr>
                <th><i class='icon-terminal'></i> No</th>
                <th><i class='icon-signal'></i> Tgl. Transaksi</th>
                <th><i class='icon-signal'></i> Status Order</th>
                <th><i class='icon-signal'></i> Total</th>
            </tr>
        </thead>
        <tbody>
          <tr>
             <td>1</td>
             <td><?php echo $transaksi["tgl"]; ?></td>
             <td><?php echo $transaksi["status"] ?></td>
             <td>Rp.<?php echo number_format($transaksi["total"],0,',','.'); ?></td>
         </tr>    	
     </tbody>
 </table>
</div></div>   <center>
  <input type="submit" name="button" id="button" class='stdbtn' value="Print Laporan" onclick="print()" />
</center>
</body>
</html>

