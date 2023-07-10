<?php
// Template Name: Plantilla Diplomado Registro
?>

<?php 
the_post()
?>
<!DOCTYPE html>
<html lang="es">
<head>
  
  <title><?php the_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    
  <?php 
  
  wp_head(); 
  
  ?>
  
  
  <style>
table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: sans-serif;
  font-size: 11px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

.column1 {
  width: 50px;
  padding-left: 40px;
}

.column2 {
  width: 100px;
}

.column3 {
  /*width: 100px;*/
}

.column4 {
  width: 110px;  
}

.column5 {
  width: 170px;  
}

.column6 {
 /* width: 222px;*/
}

.column8 {
  width: 120px;
}


@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 24px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: OpenSans-Regular;
    font-size: 14px;
    color: #999999;
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "ID";
  }
  table tbody tr td:nth-child(2):before {
    content: "FORM ID";
  }
  table tbody tr td:nth-child(3):before {
    content: "EVENTOS";
  }
  table tbody tr td:nth-child(4):before {
    content: "NOMBRE";
  }
  table tbody tr td:nth-child(5):before {
    content: "RUT";
  }
  table tbody tr td:nth-child(6):before {
    content: "CARGO";
  }
  table tbody tr td:nth-child(7):before {
    content: "CORREO";
  }  
  table tbody tr td:nth-child(8):before {
    content: "FECHA";
  }

  .column4,
  .column5,
  .column6 {
    text-align: left;
  }

  .column7,
  .column8,
  .column4,
  .column5,
  .column6,  
  .column1,
  .column2,
  .column3 {
    width: 100%;
  }

  tbody tr {
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .container-table100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}
</style>
 
  
</head>
<body>


<?php the_content(); ?>


 <?php wp_footer(); ?>

</body>
</html>