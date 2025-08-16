import { useEffect, useState } from "react";
import axios from "axios";

export default function Projects() {
  const [projects, setProjects] = useState([]);

  useEffect(() => {
    axios.get("http://127.0.0.1:8000/api/projects")
      .then(res => setProjects(res.data))
      .catch(err => console.error(err));
  }, []);

  return (
    <div>
      <h2>My Projects</h2>
      <ul>
        {projects.map(project => (
          <li key={project.id}>
            <h3>{project.title}</h3>
            <p>{project.description}</p>
            {project.image && <img src={project.image} alt={project.title} width="200" />}
            {project.link && <a href={project.link} target="_blank" rel="noreferrer">View Project</a>}
          </li>
        ))}
      </ul>
    </div>
  );
}
