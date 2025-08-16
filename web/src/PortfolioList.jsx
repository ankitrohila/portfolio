import { useEffect, useState } from 'react';

export default function PortfolioList() {
  const [portfolios, setPortfolios] = useState([]);
  const [error, setError] = useState('');

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/portfolios')
      .then(res => {
        if (!res.ok) throw new Error('Network response was not ok');
        return res.json();
      })
      .then(data => setPortfolios(data))
      .catch(err => setError(err.message));
  }, []);

  return (
    <div>
      <h1>Portfolios</h1>
      {error && <p style={{color:'red'}}>Error: {error}</p>}
      <pre>{JSON.stringify(portfolios, null, 2)}</pre>
    </div>
  );
}
