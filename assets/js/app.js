
import '../css/app.css';
import ReactDOM from 'react-dom';
import React, { Component } from 'react';
import Produits from './components/Produits';
class App extends Component {
    render() {
        return (
            <>
                <Produits />
            </>
        )
    }
}
ReactDOM.render(<App />, document.getElementById("accueil"));
