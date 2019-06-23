
var Logar = function({commit},data,router){
    const headers = {
        'X-CSRF-TOKEN' : localStorage.getItem('csrf')
    }
    axios.post('http://localhost:8000/api/loguin',data,headers)
    .then(retorno => {
        if(retorno.data.token) {
            localStorage.setItem('jwt-Auth',retorno.data.token);
            commit('LOGGED',retorno.data.token);
            router.push('agenda');
        }else {
            commit('ERR','Credenciais inválidas!');
        }

    })
    .catch(err => console.warn(err));
}

module.exports = {
    Logar,
}
