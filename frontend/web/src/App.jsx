import React, {useState, useEffect} from 'react';
import axios from 'axios';

export default function App() {
  const [data, setData] = useState([])

  useEffect(() => {
    axios.get("http://localhost:8080/post")
    .then(response => {
      setData(response.data);
    }).catch(error => {
      console.log(error);
    })
  }, setData)

  return (
    <div>
      <select name="post_id">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  );
}
