/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./src/assets/js/custom/carousel.js ***!
  \******************************************/

  var jsonData = {
    "projects": [{
        "image": "project1.jpg",
        "name": "Sistem Manajemen Keuangan",
        "description": "I led the development of the Financial Management System project, aimed at helping companies track and manage their finances. We used technologies such as JavaScript, React, and Node.js. You can find the project on GitHub.",
        "technologies": ["JavaScript", "React", "Node js"],
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
        "technologies": ["PHP", "Laravel", "SASS"],
        "liveServerLink": "https://www.example.com/live-server3",
        "githubRepo": "https://github.com/username/e-commerce-app"
      }
    ],
    "certificates": [{
        "image": "assets/media/images/Photograph.jpg",
        "title": "Photography & VideoGraphy",
        "description": "This is the first certificate."
      },
      {
        "image": "assets/media/images/Journalism.jpg",
        "title": "Journalism & Reportage",
        "description": "This is the second certificate."
      },
      {
        "image": "assets/media/images/digitalmagz.jpg",
        "title": "Digital Magazine Application",
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
        "<img src='" + project.image + "'>" +
        "<h5>" + project.name + "</h5>" +
        "<p>" + project.description + "</p>";
  
      var technologiesDiv = document.createElement("div");
      technologiesDiv.className = "technologies";
      
      project.technologies.forEach(function (technology) {
        var technologyAnchor = document.createElement("a");
        technologyAnchor.className = technology;
        technologyAnchor.innerText = technology; 
        technologiesDiv.appendChild(technologyAnchor); 
      });
  
      projectDiv.appendChild(technologiesDiv);
      projectItem.appendChild(projectDiv);
    });
  }
  
  function fillCertificatesList() {
    jsonData.certificates.forEach(function (certificate) {
      var certificateDiv = document.createElement("div");
      certificateDiv.className = "item";
      certificateDiv.innerHTML = 
        "<img src='" +certificate.image+"'>"  +
        "<h5>" + certificate.title + "</h5>" +
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
/******/ })()
;
//# sourceMappingURL=carousel.js.map