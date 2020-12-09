import { Component, OnInit } from '@angular/core';
import { HttpHeaders, HttpClient } from '@angular/common/http';
import { StudentFavorite, FavoritesService} from 'src/app/services/favorites.service';
import { StudentsService } from 'src/app/services/students.service';
import { Router } from '@angular/router';
import { OtherUsersService } from 'src/app/services/other-users.service';


@Component({
  selector: 'app-feed',
  templateUrl: './feed.page.html',
  styleUrls: ['./feed.page.scss'],
})
export class FeedPage implements OnInit {
  userJson
  PubDetails
  OtherUser
  idUserProfile
  studentsFavorite: StudentFavorite[];

  constructor(
    private http: HttpClient, 
    private service: FavoritesService,
    private service2: StudentsService,
    private router: Router,
    private service3: OtherUsersService
    
    ) { }

  onCreate() {
    // Do this on service. But for this demo lets do here
    const token = localStorage.getItem('token');
    const headers = new HttpHeaders({
      Authorization: 'Bearer ' + token
    });

    this.http.post(`http://localhost/auth_app/api/create.php`, 'body', { headers }).subscribe(console.log);
  }

  ngOnInit(){
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

    this.idUserProfile = this.userJson.codUsers;

    this.service.getAll(this.idUserProfile).subscribe(response =>{
      this.studentsFavorite = response;
    });
  }

  doRefresh(event) {
    setTimeout(() => {
  
      this.service.getAll(this.idUserProfile).subscribe(response =>{
        this.studentsFavorite = response;
      });      
      
      event.target.complete();
    }, 100);
  }


  Detalhes(codPublicacaoUsuario: string){
    this.service2.get(codPublicacaoUsuario).subscribe(response =>{
      this.PubDetails = response;
      localStorage.setItem('pub', JSON.stringify(this.PubDetails));

      this.router.navigate(['detail'])
      
    });
  }

  DetalhesUser(codUsers: string){
    this.service3.infoUserGet(codUsers).subscribe(response=>{
      this.OtherUser = response;
      localStorage.setItem('usuarioVisu', JSON.stringify(this.OtherUser));

      this.router.navigate(['perfil-user'])
    });
  }

  Disfavor(codPublicacao){
    this.service.disfavor(codPublicacao).subscribe(()=> {
      this.studentsFavorite = this.studentsFavorite.filter(std => std.codPublicacao !== codPublicacao);
    });
  }
  

  navigateToPerfil(){
    this.router.navigate(['perfil']);
  }

  navigateToPendencies(){
    this.router.navigate(['pendencias']);
  }
}
