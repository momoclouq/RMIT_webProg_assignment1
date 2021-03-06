//additional data
const data = {
    Minh: {
        otherName: "momocloud",
        age: 21,
        experience: "Web development and Java",
        hobby: "Read books and play games"
    },
    Dat: {
        otherName: "Jaaaay",
        age: 20,
        experience: "Web development",
        hobby: "Read books and play games"
    },
    Anh: {
        otherName: "Devsain",
        age: 20,
        experience: "Web development and Testing",
        hobby: "DIY and Game related stuff"
    },
    Phat: {
        otherName: "COS",
        age: 20,
        experience: "Web development",
        hobby: "Read books and play games"
    }
}

let allImgs = document.querySelectorAll(".card img");


for (let i = 0; i < allImgs.length; i++){
    console.log(allImgs[i]);
    allImgs[i].addEventListener("click", () => {
        let box = document.createElement("div");

        let title = document.createElement("div");
        title.textContent = "Personal information";
        title.classList.add("boxTitle");
        box.appendChild(title);

        let otherName = document.createElement("div");
        otherName.textContent = "Nickname: " + data[allImgs[i].alt].otherName;
        box.appendChild(otherName);

        let age = document.createElement("div");
        age.textContent = "Age: " + data[allImgs[i].alt].age;
        box.appendChild(age);

        let experience = document.createElement("div");
        experience.textContent = "Experience: " + data[allImgs[i].alt].experience;
        box.appendChild(experience);

        let hobby = document.createElement("div");
        hobby.textContent = "Hobbies: " + data[allImgs[i].alt].hobby;
        box.appendChild(hobby);

        box.classList.add("member_info");

        let blurBackground = document.createElement("div");
        blurBackground.classList.add("blurBackground");

        //events
        box.addEventListener("click", function(){
            box.remove();
            blurBackground.remove();
        });
        
        let body = document.querySelector("body");

        body.appendChild(blurBackground);
        body.appendChild(box);
       
    }); 
}


