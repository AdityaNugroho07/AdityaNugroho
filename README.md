# 1. Jobsheet1
# Coding jobsheet1
<img width="416" alt="codingan jobb1" src="https://github.com/user-attachments/assets/07b03d47-1853-4dd8-a7ab-34251e68c8e6">
<img width="428" alt="jobb1 2" src="https://github.com/user-attachments/assets/b63bb144-2329-438f-86a1-82059b1ba9bb">

# Penjelasan
# 1. Class
Class digunakan sebagai blueprint atau cetakan untuk membuat objek mahasiswa, yang memiliki atribut berupa:
1. nama
2. nim
3. jurusan

Atribut tersebut dideklarasikan yang disebut private, artinya hanya bisa diakses dari dalam class tersebut.

# 2. Constructor
Constructor adalah fungsi khusus yang otomatis dipanggil saat sebuah objek dibuat. Pada class mahasiswa, constructor didefinisikan dengan nama __construct, yang menerima tiga parameter yaitu: $nama, $nim, dan $jurusan.

# 3. Metode
Ada beberapa metode yang ada di class ini.

1. tampilkanData() fungsinya untuk mengembalikan data mahasiswa dalam bentuk string, yaitu nama, nim, dan jurusan.
2. updateJurusan() fungsinya untuk mengubah nilai atribut jurusan sesuai dengan parameter yang diberikan.
3. setNim dan setNama() fungsinya untuk mengubah nilai atribut nim dan nama.

# 4. Penggunaan atribut dan metode
Objek $mahasiswa dibuat dengan nilai awal nama "Aditya Nugroho", NIM"230302073", dan jurusan "Teknik Informatika".

Berikutnya tampilkanData() untuk menampilkan informasi mahasiswa. 

Kemudian atribut jurusan menggunakan metode updateJurusan(). 

Setelah itu setter digunakan untuk mengubah NIM dan nama. Nilai NIM diubah menggunakan setNim() dan nama diubah menggunakan setNama().

# Output
<img width="447" alt="Output jobsheet1" src="https://github.com/user-attachments/assets/c9815ce2-3906-474c-889a-65e0d537cf49">

# 1. Tugas Modul 1 dan 2
# Coding Tugas Modul 1 dan 2
<img width="477" alt="tugas modul 1 dan 2" src="https://github.com/user-attachments/assets/b5655add-00e3-4fe1-a609-4cfdd855f38e">

# Penjelasan
# 1. Class Dosen
Class dosen mendeskrisipkan sebuah objek dosen yang memiliki atribut:
1. $nama: Nama dosen.
2. $nip: nip.
3. $matakuliah: Mata kuliah yang diajar oleh dosen.

# 2. Atribut Public
Atribut di dalam class dosen dideklarasikan sebagai public, yang artinya bisa diakses dari luar class.

# 3. Constructor
Fungsi __construct adalah untuk menginisialisasi atribut.

# 4. Method
Metod ini menampilkan informasi dosen berupa nama, nip, dan mata kuliah yang diajar.

# Output
<img width="511" alt="Output tugas modul 1 dan 2" src="https://github.com/user-attachments/assets/c6c2f415-09dd-42f3-abf5-f152851b01ef">

# 2. Jobsheet2
# Coding jobsheet2
<img width="326" alt="codingan jobb2" src="https://github.com/user-attachments/assets/d1e9037a-ced2-434b-9ffa-22c030d55431">
<img width="506" alt="codingan jobb2 1" src="https://github.com/user-attachments/assets/5b23b118-50ec-4396-bf00-eac3559a5369">
<img width="428" alt="codingan jobb2 2" src="https://github.com/user-attachments/assets/325a3af6-3ff5-4998-a411-620e15585c08">
<img width="344" alt="codingan jobb2 3" src="https://github.com/user-attachments/assets/c98636e2-54a5-4915-80ee-0488f00c01ad">
<img width="428" alt="jobb2 1" src="https://github.com/user-attachments/assets/78376834-105d-4a47-b7b8-3c3d90765460">


# Penjelasan
# 1. Class dan Object
1. Class: Blueprint atau template untuk menciptakan objek. 
2. Object: Instance dari class yang memiliki atribut (properties) dan perilaku  (methods). 

# 2. Encapsulation
Encapsulation adalah menyembunyikan detail implementasi dan hanya memberikan  akses melalui metode tertentu. 

1. Getter: Mengembalikan nilai dari atribut.
2. Setter: Mengubah nilai dan atribut.

# 3. Inheritance
Inheritance adalah kelas dapat mewarisi properti dan metode dari kelas lain.

1. Class Pengguna: Memiliki atribut nama yang dilindungi (protected), sehingga bisa diakses oleh class turunannya (Dosen).
2. Class Dosen: Menambahkan atribut mataKuliah dan metode tampilkandatadosen() untuk menampilkan data dosen.

# 4. Polymorphism
Polymorphism adalah Metode yang sama dapat memiliki implementasi berbeda  dalam class yang berbeda. 

Pada kode ini, class PenggunaPolymorph adalah class dasar yang memiliki metode aksesfitur(). Class DosenPoly dan MahasiswaPoly adalah turunan yang mengoverride metode tersebut untuk memberikan output yang berbeda.

# 5. Abstraction
Abstraction adalah menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.

1. Class PenggunaAbstraction: Adalah class abstrak yang mendeklarasikan metode abstrak aksesfitur().
2. Class MahasiswaAbstraction dan DosenAbstraction: Mengimplementasikan metode aksesfitur() untuk menghasilkan output yang berbeda.

# Output 
<img width="464" alt="Output jobsheet2" src="https://github.com/user-attachments/assets/d9272e96-be6e-423e-a56c-933beee39231">

# 3. Jobsheet3
# Coding jobsheet3
<img width="313" alt="codingan jobb3" src="https://github.com/user-attachments/assets/eb3dc278-f5f6-47c4-b8cf-fef7284c0e0a">
<img width="293" alt="codingan jobb3 1" src="https://github.com/user-attachments/assets/6dc5ab2a-2c03-48d4-b79d-4091751944ce">
<img width="303" alt="jobb3 1" src="https://github.com/user-attachments/assets/6995a7c5-c8b2-455d-9bde-1bbc61121f47">


# Penjelasan
# 1. Inheritance
Class Person adalah class dasar (parent class) yang berisi atribut name dengan akses protected, sehingga dapat diwarisi oleh class turunan. Class Teacher dan Student merupakan class turunan dari Person.

1. Class person memiliki atribugt name dan metode getName().
2. Class teacher mewarisi class person dan memiliki tambahan atribut teacherID.
3. Class student sama seperti teacher, class ini juga mewarisi class person, dengan tambahan atribut studentID.

# 2. Polymorphism
Polymorphism memungkinkan class yang berbeda untuk menggunakan metode yang sama dengan perilaku yang berbeda.

1. Polymorphism pada getName(): Baik Teacher maupun Student mengoverride metode getName() dari class Person. Meskipun nama metode sama, hasil yang diberikan berbeda.

# 3. Encapsulation
Encapsulation melindungi data dengan membuat atribut private dan menyediakan metode getter serta setter untuk mengakses atau mengubah data tersebut.

1. Pada class Student, atribut studentID adalah private, dan diakses melalui metode getStudentID() dan setStudentID().

# 4. Abstraction
Class abstrak hanya mendefinisikan struktur dari metode-metode, yang kemudian harus diimplementasikan oleh class turunannya.

1. Class Course: Adalah class abstrak yang mendeklarasikan metode getCourseDetails(), yang harus diimplementasikan oleh class turunannya.
2. Class OnlineCourse dan OfflineCourse: Keduanya mengimplementasikan metode getCourseDetails() yang dideklarasikan di class abstrak Course.

# Contoh Penggunaan dan Output
# 1. Instanisasi Objek student:
1. Mahasiswa "Aditya Nugroho" dengan ID "230302073".
2. Metode getName() mengembalikan nama mahasiswa, dan getStudentID() menampilkan ID mahasiswa.

# 2. Instanisasi Objek teacher:
1. Dosen "Andi" dengan ID dosen "198765".
2. Metode getName() mengembalikan nama dosen, dan getTeacherID() menampilkan ID dosen.

# 3. Instanisasi Objek OnlineCourse dan OfflineCourse:
1. OnlineCourse dengan nama kursus "Pemrograman Web".
2. OfflineCourse dengan nama kursus "Bahasa Inggris".

# Output
<img width="461" alt="Output jobsheet3" src="https://github.com/user-attachments/assets/8a3b7a4f-f0fc-4b8c-a365-fa0ff370b591">

# 2. Tugas Modul 5 dan 6
# Coding Tugas Modul 5 dan 6
<img width="374" alt="tugas modul 5 dan 6" src="https://github.com/user-attachments/assets/ebdf1764-9cc5-441b-b8af-a3b62c2f21c8">
<img width="392" alt="tugas modul 5 dan 6 1" src="https://github.com/user-attachments/assets/ece64d7f-50f3-4250-9484-50d3837a1228">
<img width="539" alt="tugas modul 5 dan 6 2" src="https://github.com/user-attachments/assets/3938cc34-8885-4053-a86e-e389f9234c59">

# Penjelasan
# 1. Kelas person
Kelas person adalah kelas induk yang mewakili individu dengan atribut:

1. $nama
2. __construct($nama)
3. Method getNama()

# 2. Inheritance
Kelas dosen dan kelas mahasiswa adalah turunan dari kelas person.

# 3. Polymorphism
Kelas dosen dan mahasiswa masing-masing memiliki metode getRole():

1. Dosen::getRole() mengembalikan "Dosen".
2. Mahasiswa::getRole() mengembalikan "Mahasiswa".

# 4. Encapsulation
Atribut nidn (di dosen) dan nim (di mahasiswa) dilindungi dengan keyword private, yang berarti atribut ini hanya bisa diakses dari dalam kelasnya sendiri.

Metode getNidn() di kelas dosen dan getNim() dikelas mahasiswa digunakan untuk mengambil nilai dari atribut yang dienkapsulasi tersebut.

# 5. Abstraction
Kelas jurnal adalah kelas abstrak, hyang berarti tidak dapat diintanisasi secara langsung.

1. Atribut $judul, yang diinisialisasi melalui constructor.
2. Metode abstrak ajukanJurnal(), yang harus diimplementasikan oleh kelas turunan dari jurnal.

# Output
<img width="553" alt="Output modul 5 dan 6" src="https://github.com/user-attachments/assets/f31f3967-fcaa-4e05-9f39-5a9831843e62">







 

   
    



