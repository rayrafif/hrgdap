Silakan jalankan aplikasi dan buka /admin/employees untuk melihat panel employee.

Untuk menghubungkan ke database MySQL Anda, atur variabel environment berikut:

- database.default.hostname=localhost
- database.default.database=hrgdap
- database.default.username=root
- database.default.password=your_password
- database.default.DBDriver=MySQLi
- database.default.port=3306

Jika Anda sudah punya tabel employees, aplikasi akan langsung membaca data dari sana. Jika belum, Anda bisa menjalankan import file employees.sql ke database hrgdap terlebih dahulu.
