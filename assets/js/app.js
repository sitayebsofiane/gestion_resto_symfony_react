
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
class Button extends Component {
    render() {
        return (
            <>
               <button type="button" className="btn btn-primary ">click</button>
            </>
        )
    }
}
ReactDOM.render(<Button />, document.getElementById("kamel"));

ReactDOM.render(<App />, document.getElementById("root"));
