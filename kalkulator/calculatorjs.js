
function wyswietl(element)
{
    const ekran = document.getElementById('ekran');
    ekran.value += element;
}
function wyczysc() 
{
    const ekran = document.getElementById('ekran');
    ekran.value = '';
}
function wynik() 
{
    const ekran = document.getElementById('ekran');
    try {
        ekran.value = eval(ekran.value); 
    } catch (error) {
        ekran.value = "Błąd";
    }
}
