function control(){
  var emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
  var isimRegex = /^[a-zA-Z\s]*$/;
  var telefonRegex = /^[0-9]+$/;
  var ad = document.getElementById("ad").value;
  var soyad = document.getElementById("soyad").value;
  var email = document.getElementById("email").value;
  var telefon = document.getElementById("telefon").value;
  var dogumTarihi = document.getElementById("dogum-tarihi").value;
  var cinsiyetErkek = document.getElementById("erkek");
  var cinsiyetKadin = document.getElementById("kadın");
  var mesajKonu = document.getElementById("konu").value;
  var mesaj = document.getElementById("mesaj").value;
  
  if(ad == null || ad == ""){
    alert("Lütfen Adınızı Giriniz!");
    return false;
  }
  else if(soyad == null || soyad == ""){
    alert("Lütfen Soyadınızı Giriniz!");
    return false;
  }
  else if(email == null || email == ""){
    alert("Lütfen Mail Adresinizi Giriniz!");
    return false;
  }
  else if(emailRegex.test(email) == false){
    alert("Lütfen Geçerli Bir Mail Adresi Giriniz!!!");
    return false;
  }
  else if(telefon == null || telefon == ""){
    alert("Lütfen Telefonunuzu Giriniz!");
    return false;
  }
  else if(dogumTarihi == null || dogumTarihi == ""){
    alert("Lütfen Doğum Tarihinizi Giriniz!");
    return false;
  }
  else if(cinsiyetErkek.checked == false && cinsiyetKadin.checked == false){
    alert("Lütfen Cinsiyetinizi Seçiniz!");
    return false;
  }
  else if(mesajKonu == null || mesajKonu == ""){
    alert("Lütfen Mesajın Konusunu Seçiniz!");
    return false;
  }
  else if(mesaj == null || mesaj == ""){
    alert("Lütfen Mesaj Yazınız!");
    return false;
  }
  else if(isimRegex.test(ad) == false){
    alert("Adınız Sayıdan Veya Sembolden Mi Oluşuyor? Lütfen Düzeltiniz!");
    return false;
  }
  else if(ad.length > 40){
    alert("Adınız Kutucuğu Maksimum 40 Karakter İçerebilir!");
    return false;
  }
  else if(isimRegex.test(soyad) == false){
    alert("Soyadınız Sayıdan Veya Sembolden Mi Oluşuyor? Lütfen Düzeltiniz!");
    return false;
  }
  else if(soyad.length > 30){
    alert("Soyadınız Kutucuğu Maksimum 30 Karakter İçerebilir!");
    return false;
  }
  else if(telefonRegex.test(telefon) == false || telefon.length > 11 || telefon.length < 11){
    alert("Lütfen Geçerli Bir Telefon Numarası Giriniz!");
    return false;
  }
  else if(mesaj.length < 25 || mesaj.length > 250){
    alert("Mesajınız Minumum 25 Maksimum 250 Karakter İçerebilir!");
    return false;
  }
  
}

