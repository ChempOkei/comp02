function api(){
    const myHeaders = new Headers();
    myHeaders.append("Accept", "application/json");
    myHeaders.append("ClientId", "thejenja");
    myHeaders.append("Content-Type", "application/json");
    myHeaders.append("Authorization", "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsImVtYWlsIjoidXNlckBleGFtcGxlLmNvbSIsImlhdCI6MTc3MTQ3ODcxNCwiZXhwIjoxNzcyMDgzNTE0fQ.ERa9EsifgiptPFtdVxxsp3CJTuOkpfTSFxbbilHv8_E");

    const raw = JSON.stringify({
    "email": "user@example.com",
    "name": "John",
    "password": "password123!"
    });

    const requestOptions = {
    method: "POST",
    headers: myHeaders,
    body: raw,
    redirect: "follow"
    };

    try {
    const response = fetch("http://localhost:3000/api/auth/register", requestOptions);
    const result = response.text();
    console.log(result)
    } catch (error) {
    console.error(error);
    };
}