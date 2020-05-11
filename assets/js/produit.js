import '../css/app.css';
import ReactDOM from 'react-dom';
import React, { Component } from 'react';
import Produits from './componentsProduit/Produits';
class App extends Component {
    render() {
        return (
            <>
                <h1>ici c'est l'affichage des produits</h1>
                <Produits />
            </>
        )
    }
}
ReactDOM.render(<App />, document.getElementById("produit"));
