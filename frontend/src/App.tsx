import React from 'react';
// import logo from './logo.svg';
import './App.css';
import liff from '@line/liff';
liff.init({
    liffId: "1656965066-N7578KLq" // Use own liffId
  })
  .then((data) => {
    console.log('data', data)
  })
  .catch((err) => {
    // Error happens during initialization
    console.log(err.code, err.message);
  });

function App() {
  const [name, setName] = React.useState('');
  const [pictureUrl, setPictureUrl] = React.useState('');
  
  console.log('getOS', liff.getOS())
  console.log('getVersion', liff.getVersion())
  console.log('isLoggedIn', liff.isLoggedIn())
  
  liff.ready.then(() => {
    // accessToken = liff.getAccessToken();
    console.log('isLoggedIn', liff.isLoggedIn())
    if (!liff.isLoggedIn()) {
      liff.login();
    }
    liff.getProfile()
    .then(profile => {
      console.log('profile', profile)
      setName(profile.displayName)
      setPictureUrl(profile.pictureUrl ? profile.pictureUrl : '')
    })
    .catch((err) => {
      console.log('error', err);
    });

  })
  // if (accessToken) {
  //   fetch("https://api...", {
  //     headers: {
  //       "Content-Type": "application/json",
  //       Authorization: `Bearer ${accessToken}`
  //     }
  //     //...
  //   });
  // }
  return (
    <div className="App">
      <header className="App-header">
          <img src={pictureUrl} alt='profile' width={100}/>
          <p>お名前を取得しました： {name}</p>
        <p>オンライン処方を開始します</p>
        <p>Q1.アレルギーはありますか</p>
        はい <input type={'radio'} name="q1"/>
        いいえ <input type={'radio'} name="q1" />
        
      </header>
    </div>
  );
}

export default App;
