<!-- <?php
$start_row = 1;
if (($csv_file = fopen("../model/Compiler_Design_Section-j(12-06-2022).csv", "r")) !== FALSE) {
  while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
    $column_count = count($read_data);
    $start_row++;
    $cl = 0;
    $clp = 0;
    for ($c=0; $c < $column_count; $c++) {
        echo $read_data[$c];
        if ($read_data[$c] == "C++") {
          $cl++;

        }

    }
  }
  
  fclose($csv_file);
}
echo $cl;

?> -->

<!-- <?php
    $cp = 0;
    $c = 0;
    $csv = "../model/Compiler_Design_Section-j(12-06-2022).csv";
    $fh = fopen($csv, 'r');
    $fp = file('../model/Compiler_Design_Section-j(12-06-2022).csv');
    $count = count($fp);
    // echo $count;
    while(list($name, $id, $compiler, $language) = fgetcsv($fh, 1024, ',')){
        // printf("<p>%s</p>", $language);
        echo $language;
        for ($i=0; $i < $count; $i++) { 
          if ($language == "C++") {
            $c++;
          }
        }
        


    }
    echo $c;
    fclose($fh);
?> -->

<!-- <?php
$cp = 0;
$c = 0;
$file = fopen("../model/Compiler_Design_Section-j(12-06-2022).csv","r");
$fp = file('../model/Compiler_Design_Section-j(12-06-2022).csv');
// echo count($fp);
while(! feof($file))
  {
  // print_r(fgetcsv($file));
  $s = fgetcsv($file);
  // print_r($s);
  if ($s['3'] == "C") {
    $c++;
  }
  elseif ($s['3'] == "C++") {
    $cp++;
  }

  
  }
fclose($file);
echo $c;
echo $cp;
?> -->

<!-- <?php
   $csvFile = file('../model/Compiler_Design_Section-j(12-06-2022).csv');
   $data = [];
   foreach ($csvFile as $line) {
       $data[] = str_getcsv($line);
   }
?> -->


<?php
  $cpj = 0;
  $cj = 0;
  $cpk = 0;
  $ck = 0;
  $cpg = 0;
  $cg = 0;
  $se = 0;
  $sy = 0;
  $cdj = 0;
  $onj = 0;
  $cdk = 0;
  $onk = 0;
  $cdg = 0;
  $ong = 0;

  $handle = fopen("../model/Compiler_Design_Section-j(12-06-2022).csv", "r");
  for ($i = 0; $row = fgetcsv($handle ); ++$i) {
      // Do something will $row array
      // print_r($row[3]);
      if ($row['3'] == "C") {
        $cj++;
      }
      elseif ($row['3'] == "C++") {
        $cpj++;
      }
      if ($row['2'] == "CodeBlocks") {
        $cdj++;
      }
      elseif ($row['2'] == "Online") {
        $onj++;
      }
  }
  fclose($handle);

  $handle = fopen("../model/Compiler_Design_Section-k(15-06-2022).csv", "r");
  for ($i = 0; $row = fgetcsv($handle ); ++$i) {
      // Do something will $row array
      // print_r($row[3]);
      if ($row['3'] == "C") {
        $ck++;
      }
      elseif ($row['3'] == "C++") {
        $cpk++;
      }
      if ($row['2'] == "CodeBlocks") {
        $cdk++;
      }
      elseif ($row['2'] == "Online") {
        $onk++;
      }
  }
  fclose($handle);

  $handle = fopen("../model/Compiler_Design_Section-g(15-06-2022).csv", "r");
  for ($i = 0; $row = fgetcsv($handle ); ++$i) {
      // Do something will $row array
      // print_r($row[3]);
      if ($row['3'] == "C") {
        $cg++;
      }
      elseif ($row['3'] == "C++") {
        $cpg++;
      }
      if ($row['2'] == "CodeBlocks") {
        $cdg++;
      }
      elseif ($row['2'] == "Online") {
        $ong++;
      }
  }
  fclose($handle);

    $handle = fopen("../model/Intern.csv", "r");
  for ($i = 0; $row = fgetcsv($handle ); ++$i) {
      // Do something will $row array
      // print_r($row[3]);
      if ($row['3'] == "Semantic Analyzer") {
        $se++;
      }
      elseif ($row['3'] == "Syntax Analysis") {
        $sy++;
      }
  }
  fclose($handle);


?>

