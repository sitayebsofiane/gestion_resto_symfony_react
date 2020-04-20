
import '../css/app.css';
import ReactDOM from 'react-dom';
import React, { Component } from 'react';
import Cars from './components/Cars';
class App extends Component {
    render() {
        return (
            <>
                <Cars />
            </>
        )
    }
}
ReactDOM.render(<App />, document.getElementById("root"));
