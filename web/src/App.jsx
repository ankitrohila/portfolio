import { useEffect, useState } from "react";

function App() {
  const [portfolios, setPortfolios] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
  const fetchPortfolios = async () => {
    try {
      const res = await fetch("http://127.0.0.1:8000/api/portfolios");
      if (!res.ok) throw new Error(`HTTP error! Status: ${res.status}`);
      const data = await res.json();
      setPortfolios(data);
    } catch (err) {
      setError(err.message);
    } finally {
      setLoading(false);
    }
  };
  fetchPortfolios();
}, []);

  // useEffect(() => {
  //   const fetchPortfolios = async () => {
  //     try {
  //       const res = await fetch("http://127.0.0.1:8000/api/portfolios");
  //       if (!res.ok) throw new Error(`HTTP error! Status: ${res.status}`);
  //       const data = await res.json();
  //       setPortfolios(data);
  //     } catch (err) {
  //       setError(err.message);
  //     } finally {
  //       setLoading(false);
  //     }
  //   };
  //   fetchPortfolios();
  // }, []);

  if (loading) return <p>Loading portfolios...</p>;
  if (error) return <p>Error: {error}</p>;

  return (
    <div>
      <h1>Portfolios</h1>
      {portfolios.length === 0 ? (
        <p>No portfolios found.</p>
      ) : (
        <ul>
          {portfolios.map((p) => (
            <li key={p.id}>
              {p.title}: {p.description}
            </li>
          ))}
        </ul>
      )}
    </div>
  );
}

export default App;
