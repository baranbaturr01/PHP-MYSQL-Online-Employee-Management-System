<script type="text/javascript">

function kontrolet() {

    var ad=$('#i_adi').val();
			ad=jQuery.trim(ad);
		var soyad=$('#i_soyad').val();
			soyad=jQuery.trim(soyad);
		var cinsiyet=$('input:radio[name=cinsiyet]:checked').val();
		var tc=$('#i_tc').val();
    tc=jQuery.trim(tc);
		var tel=$('#i_tel').val();
			tel=jQuery.trim(tel);
 var dogum=$('#i_dogum').val();
 	dogum=jQuery.trim(dogum);
		if(ad==''){
			alert("Lütfen bir ad belirtiniz");
			}
			else if(soyad==''){
				alert("lütfen bir soyad belirtiniz");
				}
			 else if(cinsiyet!='erkek' && cinsiyet!='kız' ){
				alert("bir cinsiyet belirtiniz");
				}
			else if(tc==''){
				alert("bir kan grubu belirtiniz");
				}
			else if(tel==''){
				alert("bir adres belirtiniz");
				}
			else if (dogum==''){
				alert("bir telefon belirtiniz");
				}

			else { $('#form').removeAttr("onsubmit"); }}


</script>
