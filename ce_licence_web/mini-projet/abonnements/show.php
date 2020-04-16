<?php 
include("../model.php");
$id=$_GET['id'];
$abonnement=find("abonnements",$id);
$abonne=find("abonnes",$abonnement['abonne_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../_css.php");?>
    <style>
          .invoice {
          position: relative;
          background: #fff;
          border: 1px solid #f4f4f4;
          padding: 20px;
          margin: 10px 25px;
      }
      .page-header {
          margin: 10px 0 20px 0;
          font-size: 22px;
      }

      @media print {
body{
  size: A4;
}
button{
display:none !important;
}

      }
    </style>
</head>
<body>
<?php include_once("../_menu.php");?>
    <div class="container">

<!------ Include the above in your HEAD tag ---------->

<section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Abonnement Num.###<?=$abonnement['id']?>
                                    <small class="pull-right">Date: <?= date_fr($abonnement['created_at'])?></small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                De <b>SPORTY-FITNESS</b>
                                <address>
                                    <strong>
                                                                            </strong>
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                A
                                <address>
                                    <strong>
                                        <?=$abonne['nom_prenom']?>                                    </strong>
                                    <br>
                                    Adresse:
                                    Casablanca                                   <br>
                                   
                                                                    
                                    Email:<?=$abonne['email']?>                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Ab #<?=$abonnement['id']?></b><br>
                                <br>
                               
                                <b>Date  de :</b> <?=date_fr($abonnement['date_de'])?><br>
                                <b>Date  à :</b> <?=date_fr($abonnement['date_a'])?><br>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre de mois</th>
                                            
                                             <th>Montant</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                                                                <tr>
                                            <td><?=d_mois($abonnement['date_de'],$abonnement['date_a'])?></td>
                                            
                                            <td><?=$abonnement['montant']?>DHS</td>
                                           
                                        </tr>
                                                                            </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <th>THT:</th>
                                                <td> <?=number_format($abonnement['montant']/1.20,2,',','.')?>DHS</td>
                                            </tr>
                                            <tr>
                                                <th>TVA:</th>
                                                <td> 20%</td>
                                            </tr>
                                            <tr>
                                                <th>TTC:</th>
                                                <td> <?=$abonnement['montant']?>DHS</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <button class="btn btn-success pull-right " style="margin-right: 5px;"  onclick="window.print()" ><i class="fa fa-download"></i> Imprimer</button>
                            </div>
                        </div>
                    </section>
                </section>
    </div>



    <?php 
    
    include("../_js.php");
    ?>
</body>
</html>