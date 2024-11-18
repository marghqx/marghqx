function Validate() {
    var errors = [];

    var imie = document.getElementById('name').value;
    var nazwisko = document.getElementById('surname').value;
    var ulica = document.getElementById('street').value;
    var dom = document.getElementById('house').value;
    var numer = document.getElementById('apartment').value;
    var telefon = document.getElementById('phone').value;
    var dataUrodzenia = document.getElementById('date').value;
    var haslo = document.getElementById('password').value;
    var miasto = document.getElementById('city').value;
    var panstwo = document.getElementById('country').value;



    var nameFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][a-ząćęłńóśżź]*$/;
    var surnameFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][A-ZĄĆĘŁŃÓŚŻŹa-ząćęłńóśżź \-]*$/;
    var passwordFormat = /^(?=.*[A-ZĄĆĘŁŃÓŚŻŹ])(?=.*[a-ząćęłńóśżź])(?=.*[0-9])(?=.*[!@#$%^&*(),.?":{}|<>])[A-Za-z0-9!@#$%^&*(),.?":{}|<>ąćęłńóśżź]{8,}$/;
    var houseFormat = /^[0-9]+[a-zA-Z]*$/;
    var cityFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][A-ZĄĆĘŁŃÓŚŻŹa-ząćęłńóśżź \-]*$/;
    var phoneFormat = /^[0-9]{3}[\s]?[0-9]{3}[\s]?[0-9]{3}$/;
    var countryFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][A-ZĄĆĘŁŃÓŚŻŹa-ząćęłńóśżź \-]*$/;
    var streetFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][a-ząćęłńóśżź\s\-0-9]*$/;
    var apartmentFormat = /^[1-9][0-9]*$/;

    if (!nameFormat.test(imie)){
        errors.push("Imię musi zawierać tylko litery, w tym pierwszą dużą");}
    if (!surnameFormat.test(nazwisko)){
        errors.push("Nazwisko musi zawierać tylko litery i/lub spacje/myślniki, pierwsza litera musi być wielka");}
    if (!streetFormat.test(ulica)){
        errors.push("Ulica musi zawierać tylko litery, w tym pierwszą dużą");}
    if (!houseFormat.test(dom)){
        errors.push("Numer domu musi zawierać liczbę i/lub litery");}
    if (!apartmentFormat.test(numer) && numer){
        errors.push("Numer mieszkania musi składać się z dodatnich cyfr");}
    if (!phoneFormat.test(telefon)){
        errors.push("Telefon musi być w formacie 123 456 789");}
    if (dataUrodzenia === "") {
        errors.push("Data urodzenia jest wymagana");}
    if (!passwordFormat.test(haslo)){
        errors.push("Hasło musi zawierać co najmniej 8 znaków, w tym przynajmniej jedną wielką literę, jedną małą literę, jedną cyfrę oraz znak specjalny");}
    if (!cityFormat.test(miasto)){
        errors.push("Miasto musi zawierać tylko litery i/lub spacje/myślniki, pierwsza litera musi być wielka");}
    if (!countryFormat.test(panstwo)){
        errors.push("Państwo musi zawierać tylko litery i/lub spacje/myślniki, pierwsza litera musi być wielka");}
    if (errors.length>0) {
        alert("Nie udało się kontynuować, wystąpiły błędy:\n\n" + errors.join("\n\n"));
        return false}
    return true
}