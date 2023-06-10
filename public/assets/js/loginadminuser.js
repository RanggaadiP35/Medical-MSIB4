<script type="text/javascript">
      function clicklogin() {
        
        alert("Silahkan login terlebih dahulu untuk mengakses segala fitur yang disediakan")

      }
      function login() {
        username = document.getElementById("username").value;
        password = document.getElementById("password").value;
  
        if (username == "" || password == ""){
          alert('Isi Username dan Password sesuai ketentuan.');
          return false;
        }
        else if (username == "User" && password == "usermedical"){
          window.location = "landinguser.html";
          return false;
        }
        else if (username == "admin" && password == "adminmedical"){
          window.location = "landingadmin.html";
          return false;
        }
        else {
          alert("Username atau password salah.");
        }
      }
    </script>