```markdown
# Git and GitHub Guide

## 1. Configure Git

### Set Username
```bash
git config --global user.name "YOUR_USERNAME"
```

### Set Email
```bash
git config --global user.email "YOUR_EMAIL"
```

## 2. Initialize a Git Project

### Navigate to Project Folder
```bash
cd desktop
cd Git and GitHub tutorial
```

### Initialize Git
```bash
git init
```

## 3. Add and Commit Files

### Add Files
```bash
git add .
```

### Commit Files
```bash
git commit -m "Initial commit"
```

## 4. Connect and Push to GitHub

### Add Remote Origin
```bash
git remote add origin YOUR_GITHUB_REPO_URL
```

### Rename Branch to Main
```bash
git branch -M main
```

### Push to GitHub
```bash
git push -u origin main
```

## 6. Update and Push Further Changes

### Add Updated Files
```bash
git add .
```

### Commit Updated Files
```bash
git commit -m "Added new task"
```

### Push Changes
```bash
git push -u origin main
```

## 7. Branching

### Create and Switch to New Branch
```bash
git checkout -b test
```

### Switch Back to Main Branch
```bash
git checkout main
```

### Merge Branch
```bash
git merge test
```

### Push Branch to GitHub
```bash
git push -u origin test
```

## 8. Clone Repository

### Clone Repository from GitHub
```bash
git clone YOUR_GITHUB_REPO_URL
```
