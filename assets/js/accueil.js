
import '../css/app.css';
import ReactDOM from 'react-dom';
import React, { Component } from 'react';
class App extends Component {
    render() {
        return (
            <>
                <h1>ici c'est l'accueil</h1>
            </>
        )
    }
}
ReactDOM.render(<App />, document.getElementById("accueil"));
