import Vue from 'vue';
import axios from 'axios';
import router from '../router';
import Fun from '../functions/index';
const LOGGED = 'LOGGED';
const ERR = 'ERR';
const state = {
    jwt:'',
    err:''
}

const mutations = {
    [LOGGED](state,...params){
        state.jwt = params;

    },
    [ERR](state,...params){
        state.err = params;}
}

const actions = {
    // methods
    persisteJWT({commit},data){
       Fun.Login.Logar({commit},data,router);
    }
}

export const Login = {
    namespaced : true,
    state,
    mutations,
    actions,
}
