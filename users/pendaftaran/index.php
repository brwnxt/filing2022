<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../assets/css/pendafaran.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link href="../assets/img/logo/Logo_Filing_revisi.png" rel="icon" />
  <link href="../assets/img/logo/Logo_Filing_revisi.png" rel="apple-touch-icon" />
  <title>FORM PENDAFTARAN FILING 2022</title>
</head>

<body onload="load()">
  <div class="container">
    <div class="title">Pendaftaran</div>
    <div class="content">
      <form action="../config/simpan.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input class="input" type="email" placeholder="Email" name="email" required />
          </div>
          <div class="input-box">
            <span class="details">NPM</span>
            <input class="input" type="text" placeholder="NPM" name="npm" minlength="8" maxlength="8"
              oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required />
          </div>
          <div class="input-box">
            <span class="details">Nama</span>
            <input class="input" type="text" placeholder="Nama" name="nama"
              oninput="this.value = this.value.replace(/[^a-z. A-Z.]/g, '').replace(/(\..*)\./g, '$1');" required />
          </div>
          <div class="input-box">
            <span class="details">Kelas</span>
            <input class="input" type="text" placeholder="Kelas" name="kelas" minlength="5" maxlength="5" required />
          </div>
          <div class="input-box">
            <span class="details">Jurusan</span>
            <select name="jurusan" type="text" id="inputState" class="input form-control"
              style="border: 1px solid #f7cd38" required>
              <option value="">Choose...</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Sistem Komputer">Sistem Komputer</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">ID Line</span>
            <input class="input" type="text" placeholder="ID Line" name="id_line" required />
          </div>
          <div class="input-box">
            <span class="details">No Whatsapp</span>
            <input class="input" type="text" placeholder="No Whatsapp" name="no_wa" required />
          </div>
          <div class="input-box choose-details">
            <input type="radio" name="pilihan_workshop" id="dot-1" value="Laravel Basic" required="required" />
            <input type="radio" name="pilihan_workshop" id="dot-2" value="Data Scientist" required="required" />
            <input type="radio" name="pilihan_workshop" id="dot-3" value="Keduanya" required="required" />
            <span class="choose-title">Pilihan Workshop</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="choosen">Laravel Basic</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="choosen">Data Science</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="choosen">Keduanya</span>
              </label>
            </div>
          </div>
          <div class="identitas-diri">
            <span class="details">Identitas Diri</span>
            <input class="identitas" type="file" name="identitas_diri" required />
            <p>Format file harus .jpeg , ukuran foto kurang dari 5 MB, dan nama file NamaLengkap</p>
          </div>
          <div class="input-box">
            <span class="details">Pilihan Pembayaran</span>
            <select name="pilihan_pembayaran" type="text" id="inputState" class="input form-control"
              style="border: 1px solid #f7cd38" required>
              <option value="">Choose...</option>
              <option value="DKI">DKI 50228084274 a.n A Fadhlurrahman</option>
              <option value="BCA">BCA 009043188590 a.n Reni Aulia Fitriani</option>
              <option value="DANA">DANA 081278534853 a.n Reni Aulia Fitriani</option>
              <option value="GoPay">Gopay 082199681774 a.n Mahfuzh</option>
            </select>
          </div>
          <div class="bukti-pembayaran">
            <span class="details">Bukti Transfer</span>
            <input class="bayar" type="file" name="bukti_pembayaran" required />
            <p>Format file harus .jpeg , ukuran foto kurang dari 5 MB, dan nama file NamaWorkshop_NamaLengkap</p>
          </div>
        </div>
        <div class="button">
          <input id="sent" type="submit" name="send" value="Submit" />
        </div>
      </form>
    </div>
  </div>
  <div class="intro">
    <div class="intro-text">
      <h1 class="hide">
        <span class="text" style="font-weight: 700">Form Pendaftaran</span>
      </h1>
      <h1 class="hide">
        <span class="text" style="font-weight: 700">FILING</span>
      </h1>
      <h1 class="hide">
        <span class="text" style="font-weight: 700">2022</span>
      </h1>
    </div>
  </div>
  <div class="slider"></div>
  <script>
    let element = document.getElementById('disabled');
    element.innerHTML = 'Pendaftaran ditutup :(';

    function myFunction() {
      let x = document.getElementById('password');
      if (x.type === 'password') {
        x.type = 'text';
      } else {
        x.type = 'password';
      }
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
    integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
    crossorigin="anonymous"></script>
  <script src="../assets/js/login.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script>
    function load() {
      document.getElementById("sent").disabled = localStorage.getItem("btn-disable") === "true" ? true : false;
      console.log(localStorage.getItem("btn-disable"));
      document.getElementById("sent").value = localStorage.getItem("btn-disable") === "true" ?
        "Pendaftaran Ditutup :(" : "submit";
    }
  </script>
</body>

</html>