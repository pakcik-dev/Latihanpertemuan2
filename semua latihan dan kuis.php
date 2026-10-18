<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Variabel & Operator</title>
</head>
<body>

<?php
echo "<hr>";
//Tugas KUIS & LATIHAN PERANCANGAN SISTEM BACKEND
//Nama : I Gusti Putu Bagus Bayu KUmara Putra 
//NIM : 250030550
//Mata Kuliah : Perancangan Sistem Backend

// Latihan biodata Mahasiawa
//=======================================
//Operator arritmatatika
//========================================
//Operator Perbadian
//========================================
//Latihan 1 menentukan Grade nilai Mahasiswa
//===========================================
//Latihan 2 Bilangan Genap Ganjil
//=========================================
//latiham 3 Array Nama Mahasiswa 
//========================================
// kuis 1 Angka habis dibagi 3
//=======================================
//Latihan 1 Menhitung luas lingkaran
//===================================
// Kuis 2 Functiom  nilai Akhir Mahasiswa
//=========================================

//================================================

// ==========================================
// Latihan 1: BIODATA MAHASISWA
// ==========================================
echo "<h2>1. Biodata Mahasiswa</h2>";
$nim         = "250030550";
$nama        = " I Gusti Putu Bagus Bayu Kumara Putra ";
$kodeJurusan = "03";
$angkatan    = 2025;
$umur        = 19;
$gender      = "Laki-Laki";
$hobi        = ["MotorCycle", "Gaming", "Badminton"];

echo "NIM          : $nim <br>";
echo "Nama         : $nama <br>";
echo "Kode Jurusan : $kodeJurusan <br>";
echo "Angkatan     : $angkatan <br>";
echo "Umur         : $umur tahun<br>";
echo "Gender       : $gender <br>";
echo "Hobi         : " . implode(", ", $hobi) . "<br>";

echo "<hr>";


// ====================2.Latihan membuat variabel ====================

//====================================================================
echo "<h2>2. Latihan Membuat Variabel</h2>";
$x = 15;
$y = 4;

//  Menghitung dan menampilkan hasil


echo "Hasil penjumlahan dari $x + $y adalah " . ($x + $y) . "<br>";
echo "Hasil pengurangan dari $x - $y adalah " . ($x - $y) . "<br>";
echo "Hasil perkalian dari $x * $y adalah " . ($x * $y) . "<br>";
echo "Hasil pembagian dari $x / $y adalah " . ($x / $y) . "<br>";
echo "Hasil modulus dari $x % $y adalah " . ($x % $y) . "<br>";
echo "Hasil pangkat dari $x ^ $y adalah " . ($x ** $y) . "<br>";

echo "<hr>";

// ==========================================
// latihan3: PERBANDINGAN VARIABEL
// ==========================================
echo "<h2>3. Perbandingan Variabel</h2>";
$x = 10;
$y = "10";

$sama       = ($x == $y)  ? "true" : "false";
$identik    = ($x === $y) ? "true" : "false";
$lebihBesar = ($x > $y)   ? "true" : "false";
$lebihKecil = ($x < $y)   ? "true" : "false";

echo "Tampilkan hasil :<br>";
echo "Nilai sama: $sama <br>";
echo "Nilai identik: $identik <br>";
echo "Lebih besar: $lebihBesar <br>";
echo "Lebih kecil: $lebihKecil <br>";

echo "<hr>";


// ====================  LATIHAN 1 ==========================

//=============================================================
echo "<h2>Latihan 1</h2>";
$nilai = 85;
if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}
echo "Nilai: $nilai <br>";
echo "Grade: $grade <br>";

echo "<hr>";

// ====================  LATIHAN 2 =====================

//=====================================================
echo "<h2>Latihan 2</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i - Genap<br>";
    } else {
        echo "$i - Ganjil<br>";
    }
}

echo "<hr>";

// ==================== LATIHAN 3 =====================

//====================================================
echo "<h2>Latihan 3</h2>";
$mahasiswa = ["Andi", "Budi", "Citra", "Dika", "Eka"];
foreach ($mahasiswa as $index => $nama) {
    echo ($index + 1) . ". $nama.<br>";
}

echo "<hr>";

// ==================== KUIS SOAL 1 ==============================

//================================================================
echo "<h2>Kuis Soal 1</h2>";
$angka = range(1, 20);
foreach ($angka as $val) {
    if ($val % 3 == 0) {
        echo $val . "<br>";
    }
}

echo "<hr>";


// ==========================================
// Latihan 1 : FUNGSI LUAS LINGKARAN & NILAI AKHIR
// ==========================================
echo "<h2>4. Fungsi dan Kuis</h2>";

// Latihan 1: Hitung Luas Lingkaran
echo "<h3>Latihan 1: Hitung Luas Lingkaran</h3>";
function hitungLuasLingkaran(float $jari) {
    return 3.14 * $jari * $jari;
}

$r = 7;
echo "Luas lingkaran dengan jari-jari $r adalah " . hitungLuasLingkaran($r) . "<br><br>";


// Kuis soal 2: Hitung Nilai Akhir
echo "<h3>(Kuis Soal 2): Nilai Akhir & Status</h3>";
// Fungsi menghitung nilai akhir berdasarkan boboecho "<h3>(Kuis Soal 2): Nilai Akhir & Status</h3>";t
function hitungNilaiAkhir( float $tugas, float $uts, float $uas ) {
    // Bobot: Tugas 30%, UTS 30%, UAS 40%
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    
    // Menentukan status lulus / tidak lulus
    $status = ($nilaiAkhir >= 70) ? "Lulus" : "Tidak Lulus";
    
    echo "Output :<br>";
    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    echo "Status: " . $status . "<br>";
}

//  pemanggilan fungsi dengan nilai tugas, uts, dan uas
hitungNilaiAkhir(80, 80, 87);
?>

</body>
</html>