import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface pendenciasUser{
  codPendencias:string;
  descPendencias:string;
  tiPendencias:string;
  codAluno:string;
  codDoador:string;
  codUsers:string;
  nomeUsers:string;
  nascUsers:string;
  sexoUsers:string;
  iconUsers:string;
  cpfUsers:string;
  cepUsers:string;
  cidadeUsers:string;
  ufUsers:string;
  municipioUsers:string;
  bairroUsers:string;
  logUsers:string;
  numUsers:string;
  complementoUsers:string
  codNivel:string;
  codEscolaridade:string;
  codInstituicao:string;
  iduser:string;
  serieEscolaridade:string;
  anofimEscolaridade:string;
  instituicaoEscolaridade:string;
  codInstituicaoEscolaridade:string;
  nivelEscolaridade:string;
  identificarEscolaridade:string;
  nivelEscolaridadeCor:string;
}

@Injectable({
  providedIn: 'root'
})
export class NotificationsService {
  private url = 'http://localhost/crud_api/api/notifications';

  constructor(private http: HttpClient) { }

  getNew(codUsers: string): Observable<pendenciasUser[]>{
    return this.http.get<[pendenciasUser]>(this.url + '/' + codUsers);
  }
}
