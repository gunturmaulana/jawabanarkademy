

--- soal nomer 2 ----
function isAcceptedUsername(username) {
    var Regex =/^[aiueo]{8-12}[a-z0-9]{1,1}$/i
    return Regex.test(username) ;
}

if (usernameValidity("john.smith")) {
    alert("Username Is Valid") ;
} else {
    alert("Username Is Invalid") ;
}




--- Soal Nomor 3 ----

#include <stdio.h>
#include <string.h>
int main() {
  char kalimat[100];
  int jumlah;
  printf("Masukkan sebuah string: " );
  fgets(kalimat, sizeof(kalimat), stdin);
  jumlah = strlen(kalimat)-1;
  printf("Jumlah karakter adalah %d\n", jumlah);
  return 0;
