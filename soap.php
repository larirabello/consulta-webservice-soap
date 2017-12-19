<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<?php
    $client = new SoapClient('http://www.webservicex.net/ConvertTemperature.asmx?WSDL');
    $function = 'ConvertTemp';
    $arguments= array('ConvertTemp' => array(
                        'Temperature'   => $_GET['Temperature'],
                        'FromUnit'      => $_GET['FromUnit'],
                        'ToUnit'      =>  $_GET['ToUnit'],
                ));
    $options = array('location' => 'http://www.webservicex.net/ConvertTemperature.asmx');
    $result = $client->__soapCall($function, $arguments, $options);
    $temperatura = $result->ConvertTempResult;

   
    //echo 'Response: '.$result->ChangeMetricWeightUnitResult." gramas";
    
    //http://www.webservicex.net/WS/WSDetails.aspx?WSID=31&CATID=13
        
        
    //http://localhost/soap/Temperatura%20SOAP/soap.php?Temperature=10&FromUnit=degreeFahrenheit&ToUnit=degreeCelsius
?>
<h1>Conversor de Temperatura</h1>
<span class="thermometer"><?php  echo $temperatura ?></span>​
<style>
html{
    background:radial-gradient(circle, #fcee92 0%,#ebcf12 50%);
    font-family: 'Raleway', sans-serif;
}

h1 {
    width: 200px;
    margin: 0 auto;
}

/* Thermometer column and text */
.thermometer{
    margin:50px auto;
    width:22px;
    height:150px;
    display:block;
    font:bold 14px/152px helvetica, arial, sans-serif;
    text-indent: 36px;
    background: linear-gradient(top, #fff 0%, #fff 50%, #db3f02 50%, #db3f02 100%);
    border-radius:22px 22px 0 0;
    border:5px solid #4a1c03;
    border-bottom:none;
    position:relative;
    box-shadow:inset 0 0 0 4px #fff;
    color:#4a1c03;
}

/* Thermometer Bulb */
.thermometer:before{
    content:' ';
    width:44px;
    height:44px;
    display:block;
    position:absolute;
    top:142px;
    left:-16px;
    z-index:-1; /* Place the bulb under the column */
    background:#db3f02;
    border-radius:44px;
    border:5px solid #4a1c03;
    box-shadow:inset 0 0 0 4px #fff;
}

/* This piece here connects the column with the bulb */
.thermometer:after{
    content:' ';
    width:14px;
    height:7px;
    display:block;
    position:absolute;
    top:146px;
    left:4px;
    background:#db3f02;
}
​
/* PARAMETROS ESPERADOS
    
      <Temperature>double</Temperature>
      <FromUnit>degreeCelsius or degreeFahrenheit or degreeRankine or degreeReaumur or kelvin</FromUnit>
      <ToUnit>degreeCelsius or degreeFahrenheit or degreeRankine or degreeReaumur or kelvin</ToUnit>

    */
</style>

