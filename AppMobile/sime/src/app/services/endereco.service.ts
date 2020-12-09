//Cadastro do endereço do usuário a partir do CEP

import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

export interface InfoUsarDois {
  codUsers?: string;
  cepUsers: string;
  cidadeUsers: string;
  ufUsers: string;
  municipioUsers: string;
  bairroUsers: string;
  logUsers: string;
  numUsers: string;
  complementoUsers: string;

}

@Injectable({
  providedIn: 'root'
})

export class EnderecoService {
  private url = 'http://localhost/auth_app/api/info2.php';

  constructor(
    private http: HttpClient
  ) { }

  findByEndereco(cep: string) {
    return this.http.get(
      `//viacep.com.br/ws/${cep}/json`,
    );
  }

  insertEndereco(user: InfoUsarDois){
    return this.http.put(this.url, user);
  }
}


