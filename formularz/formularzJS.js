function Validate() {
    var errors = [];

    var nameFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][a-ząćęłńóśżź]*$/;
    var surnameFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][A-ZĄĆĘŁŃÓŚŻŹa-ząćęłńóśżź \-]*$/;
    var passwordFormat = /^(?=.*[A-ZĄĆĘŁŃÓŚŻŹ])(?=.*[a-ząćęłńóśżź])(?=.*[0-9])(?=.*[!@#$%^&*(),.?":{}|<>])[A-Za-z0-9!@#$%^&*(),.?":{}|<>ąćęłńóśżź]{13,}$/;
    var houseFormat = /^[0-9]+[a-zA-Z]*$/;
    var cityFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][A-ZĄĆĘŁŃÓŚŻŹa-ząćęłńóśżź \-]*$/;
    var phoneFormat = /^[0-9]{3}[\s]?[0-9]{3}[\s]?[0-9]{3}$/;
    var countryFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][A-ZĄĆĘŁŃÓŚŻŹa-ząćęłńóśżź \-]*$/;
    var streetFormat = /^[A-ZĄĆĘŁŃÓŚŻŹ][a-ząćęłńóśżź\s\-]*$/;
    var apartmentFormat = /^[1-9][0-9]*$/;
    var allowedGenders = ["m", "k", "i"];
    
    var imie = document.forms["form"]["name"].value;
    if (!nameFormat.test(imie)){
        errors.push("Błąd w polu \"imię\": musi zawierać tylko litery, w tym pierwszą dużą");
    }

    var nazwisko = document.forms["form"]["surname"].value;
    if (!surnameFormat.test(nazwisko)){
        errors.push("Błąd w polu \"nazwisko\": musi zawierać tylko litery (ewentualnie odzielone spacją lub myślnikiem), w tym pierwszą dużą");
    }

    var ulica = document.forms["form"]["street"].value;
    if (!streetFormat.test(ulica)){
        errors.push("Błąd w polu \"ulica\": musi zawierać tylko litery, w tym pierwszą dużą");
    }

    var dom = document.forms["form"]["house"].value;
    if (!houseFormat.test(dom)){
        errors.push("Błąd w polu \"dom\": musi zawierać liczbę plus (opcjonalnie) litery");
    }
    var numer = document.forms["form"]["apartment"].value;
    if (!apartmentFormat.test(numer) && numer){
        errors.push("Błąd w polu \"mieszkanie\": numer mieszkania musi składać się z dodatnich cyfr");
    }
    
    var telefon = document.forms["form"]["phone"].value;
    if (!phoneFormat.test(telefon)){
        errors.push("Błąd w polu \"telefon\": musi być w formacie: XXX XXX XXX");
    }

    var dataUrodzenia = document.forms["form"]["date"].value;
    if (dataUrodzenia === "") {
        errors.push("Błąd w polu \"data urodzenia\": to pole jest wymagane");
    }
   
    var haslo = document.forms["form"]["password"].value;
    if (!passwordFormat.test(haslo)){
        errors.push("Błąd w polu \"hasło\": musi zawierać co najmniej 13 znaków, w tym przynajmniej jedną wielką literę, jedną małą literę, jedną cyfrę oraz znak specjoalny");
    }
    
    
    var miasto = document.forms["form"]["city"].value;
    if (!cityFormat.test(miasto)){
        errors.push("Błąd w polu \"miasto\": musi zawierać tylko litery (ewentualnie odzielone spacją lub myślnikiem), w tym pierwszą dużą");
    }
    
    
    var panstwo = document.forms["form"]["country"].value;
    if (!countryFormat.test(panstwo)){
        errors.push("Błąd w polu \"państwo\": musi zawierać tylko litery (ewentualnie odzielone spacją lub myślnikiem), w tym pierwszą dużą");
    }

    if (errors.length>0) {
        alert("Nie udało się kontynuować, wystąpiły błędy:\n\n" + errors.join("\n\n"));
        return false
    }
    
    return true
}