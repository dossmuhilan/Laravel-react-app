import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Example extends Component {
    render () {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <h1>Welcome to Laravel React App !</h1>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Example;

if (document.getElementById('list')) {
    ReactDOM.render(<Example />, document.getElementById('list'));
}
