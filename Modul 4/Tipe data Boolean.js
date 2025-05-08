var isLogin = true;
var isVerified = false;

var x = 10;
var y = 5;

var lebihBesar = x > y;
var samaDengan = x === y;

console.log("isLogin:", isLogin);
console.log("isVerified:", isVerified);
console.log("Apakah x lebih besar dari y?", lebihBesar);
console.log("Apakah x sama dengan y?", samaDengan);

if (isLogin && isVerified) {
  console.log("Akses diberikan");
} else {
  console.log("Akses ditolak");
}
