function formControl(){
    var kullanici = document.getElementById("kullanıcı").value;
    var sifre = document.getElementById("sifre").value;

    if(kullanici == null || kullanici == ""){
        alert("Kullanıcı Adı Boş Bırakılamaz!!!");
        return false;
    }
    else if(kullanici.includes("@sakarya.edu.tr") == false){
        alert("Lütfen Geçerli Bir Kullanıcı Adı Giriniz!");
        return false;
    }
    else if(sifre == null || sifre == ""){
        alert("Şifre Boş Bırakılamaz");
        return false;
    }
    
}