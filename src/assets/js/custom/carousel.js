
  var jsonData = {
    "projects": [{
        "image": "project1.jpg",
        "name": "Sistem Manajemen Keuangan",
        "description": "I led the development of the Financial Management System project, aimed at helping companies track and manage their finances. We used technologies such as JavaScript, React, and Node.js. You can find the project on GitHub.",
        "technologies": ["JavaScript", "React", "Node.js"],
        "liveServerLink": "https://www.example.com/live-server1",
        "githubRepo": "https://github.com/username/financial-management"
      },
      {
        "image": "project2.jpg",
        "name": "Aplikasi Penjadwalan Acara",
        "description": "I served as the lead developer for the Event Scheduling Application project. This application allows users to create and manage personal event schedules. We used technologies like HTML, CSS, and JavaScript to develop this app.",
        "technologies": ["HTML", "CSS", "JavaScript"],
        "liveServerLink": "https://www.example.com/live-server2",
        "githubRepo": "https://github.com/username/event-scheduler"
      },
      {
        "image": "project3.jpg",
        "name": "Aplikasi Mobile E-commerce",
        "description": "This project involved developing a Mobile E-commerce Application that allows users to shop for products online. I was responsible for developing the front-end using React Native. The project leverages modern technologies like React Native, Redux, and Firebase.",
        "technologies": ["React Native", "Redux", "Firebase"],
        "liveServerLink": "https://www.example.com/live-server3",
        "githubRepo": "https://github.com/username/e-commerce-app"
      }
    ],
    "certificates": [{
        "image": "certificate1_image.jpg",
        "title": "Sertifikat 1",
        "description": "This is the first certificate."
      },
      {
        "image": "certificate2_image.jpg",
        "title": "Sertifikat 2",
        "description": "This is the second certificate."
      },
      {
        "image": "certificate3_image.jpg",
        "title": "Sertifikat 3",
        "description": "This is the third certificate."
      }
    ]
  };

  const projectButton = document.getElementById("project-button");
  const certificateButton = document.getElementById("certificate-button");
  const projectList = document.getElementById("projectList");
  const projectItem = document.getElementById("projectItem");
  const certificateItem = document.getElementById("certificateItem");
  const certificatesList = document.getElementById("certificateslist");
  const projectItems = projectList.querySelector(".items");
  const certificateItems = certificatesList.querySelector(".items");

  function fillProjectList() {
    jsonData.projects.forEach(function (project) {
      var projectDiv = document.createElement("div");
      projectDiv.className = "item";
      projectDiv.innerHTML = 
      "<img src='" +project.image+"'>" +
      "<h3>" + project.name + "</h3>" +
      "<p>" + project.description + "</p>";
      projectItem.appendChild(projectDiv);
    });
  }
  
  function fillCertificatesList() {
    jsonData.certificates.forEach(function (certificate) {
      var certificateDiv = document.createElement("div");
      certificateDiv.className = "item";
      certificateDiv.innerHTML = 
        "<img src='" +certificate.image+"'>"  +
        "<h3>" + certificate.title + "</h3>" +
        "<p>" + certificate.description + "</p>";
        certificateItem.appendChild(certificateDiv);
    });
  }

  fillProjectList();
  fillCertificatesList();




  projectButton.addEventListener("click", () => {
    projectList.classList.add("list-active");
    certificatesList.classList.remove("list-active");
    projectButton.classList.add("button-list-active");
    certificateButton.classList.remove("button-list-active");
  });

  certificateButton.addEventListener("click", () => {
    certificatesList.classList.add("list-active");
    projectList.classList.remove("list-active");
    certificateButton.classList.add("button-list-active");
    projectButton.classList.remove("button-list-active");
  });