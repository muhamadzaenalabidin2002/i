<?php
  class bmipasien {

    public $nama,
        $berat,
        $tinggi,
        $umur,
        $jeniskelamin;
    public function hasilBMI()
    {
        return "<b>Nama : $this->nama <br><br>
                Berat Badan : $this->berat <br><br>
                Tinggi Badan : $this->tinggi <br><br>
                Umur : $this->umur <br><br>
                Jenis Kelamin : $this->jeniskelamin <br><br>";
    }
    public function statusBMI($BMI)
    {
      if ($BMI < 18.5) {
         return "<td>kekurangan Berat Badan</td>";
       } else if ($BMI >= 18.5 && $BMI <= 24.9) {
         return "<td>Normal (ideal)</td>";
       } else if ($BMI >= 25.0 && $BMI <= 29.9) {
         return "<td>kelebihan Berat Badan</td>";
       } else {
         return "<td>kegemukan (obesitas)</td>";
       } 
    }
}
if(isset($_GET["nama__lengkap"])){
    $bmi = new bmipasien;
    $bmi->nama = $_GET["nama__lengkap"];
    $bmi->berat = $_GET["berat__"];
    $bmi->tinggi = $_GET["tinggi__"];
    $bmi->umur = $_GET["umur__"];
    $bmi->jeniskelamin = $_GET["jenis__kelamin"];
} 
$pasien1 = ['nama' => 'Siti Azizatun Wardah', 'kelamin' => 'perempuan', 'umur' => 18, 'berat' => 46.2, 'tinggi' => 155];
$pasien2 = ['nama' => 'Siti Fauziyah', 'kelamin' => 'perempuan', 'umur' => 20, 'berat' => 42.8, 'tinggi' => 158];
$pasien3 = ['nama' =>'Siti Zakiyah Tunnufus', 'kelamin' => 'perempuan', 'umur' => 22, 'berat' => 90.3, 'tinggi' => 154];
$pasien4 =['nama' => $bmi->nama, 'kelamin' => $bmi->jeniskelamin, 'umur' => $bmi->umur, 'berat' => $bmi->berat,'tinggi' => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>
      

