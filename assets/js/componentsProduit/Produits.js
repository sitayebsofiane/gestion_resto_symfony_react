import React, { Component, Fragment } from 'react';
import Produit from './Produit';

class Produits extends Component{
   
     state={
        produits:[
        {name:'chese burger',description:'red',prix:2},
        {name:'mergueze',description:'black',prix:2},
        {name:'kebab turc',description:'green',prix:2.1}
        ],
        titre:'catalogue'
     }
  
    addTenYears=()=>{
      const updatedState = this.state.produits.map((param)=> {if(param.prix<5) return param.prix*=1.02});
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
        <button onClick={this.addTenYears}>augmenter </button>
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
                    <Produit nom = {produit.name} description={produit.description}  prix={produit.prix}/>
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
export default Produits;