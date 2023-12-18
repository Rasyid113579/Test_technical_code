import React, {useState} from 'react';
import './App.css';

function App() {
  const [name, setName] = useState();
  const [answer, setAnswer] = useState('');

  const buttonClicked = (Type) => {
    fetch('http://127.0.0.1:8000/api/api.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `type=${Type}&value=${name}`,
    })
      .then((response) => response.text())
      .then((data) => {
        setAnswer(data);
      });
  }

  return (
    <div className="App">
      <div>
        <input
          text="text"
          value={name}
          placeholder='Input Angka'
          onchange={(e) => setName(e.target.value)}
        />
      </div>
      <div>
        <button onClick={ () => buttonClicked('segitiga')}>Generate Segitiga</button>
        <button onClick={ () => buttonClicked('ganjil')}>Generate Bilangan Ganjil</button>
        <button onClick={ () => buttonClicked('prima')}>Generate Bilangan Prima</button>
      </div>
      <div>
        <h1>Result :</h1>
        <h1 dangerouslySetInnerHTML={{__html: answer}}/>
      </div>
    </div>
  );
}

export default App;
