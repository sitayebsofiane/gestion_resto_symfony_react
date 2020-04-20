import React, { Component, Fragment } from 'react';
import Car from './Car';

class Cars extends Component{
   
     state={
        produits:[
        {name:'Ford',description:'red',prix:2001},
        {name:'mercedes',description:'black',prix:2002},
        {name:'peugeot',description:'green',prix:2003}
        ],
        titre:'catalogue'
     }
  
    addTenYears=()=>{
      const updatedState = this.state.produits.map((param)=> param.prix+=10);
       this.setState({
        updatedState
       })
     }
    capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
    render(){
      return (
        <>
        <h1>{this.capitalizeFirstLetter(this.state.titre)}</h1>
        <button onClick={this.addTenYears}>+ 10 ans</button>
        <table className="table">
        <thead>
        <tr>
          <th>nom</th>
          <th>description</th>
          <th>prix</th>
        </tr>
        </thead>
        <tbody>
        
             {
               this.state.produits.map((produit,index)=>{
                 return(
                   <Fragment key={index}>
                    <Car nom = {produit.name} color={produit.description}  year={produit.prix}/>
                   </Fragment> 
                 )
               })
             }
             
        </tbody>
        </table>
        </>
    );
    }
  }
export default Cars;