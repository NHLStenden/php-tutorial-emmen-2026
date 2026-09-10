# Getting debugging to work

The Docker container with the webserver is prepared for debugging:
* Single-step through a PHP program
* showing variables
* testing expressions
* ...

However, your IDE must be configured properly in order to see where in your PHP source code the code was stopped,
what variables are present etcetera.

# PHP Storm

Please have a look at this [page](https://www.jetbrains.com/help/phpstorm/debugging-with-phpstorm-ultimate-guide.html)
to see how the Jetbrains PHP Storm IDE should be setup. A number of things are already working so focus on the part on
how to configure a 'server' in PHP storm to make sure the paths to your source-code are known. 

So the following parts are already taken care of:
* "1. Install Xdebug"

To do:
* 2. Add a debugging extension to the web browser
* 3. Configure PhpStorm to listen to incoming connections

This guide explains how to configure **PhpStorm** so that breakpoints work correctly and PhpStorm can map files inside the Docker container to the local project files.

## 1. Configure the PhpStorm Server

Open:

**Settings → PHP → Servers**

Create a new server.

Use:

| Setting      | Value          |
| ------------ | -------------- |
| **Name**     | `php-tutorial` |
| **Host**     | `localhost`    |
| **Port**     | `80`           |
| **Debugger** | `Xdebug`       |

The server name must match the `PHP_IDE_CONFIG` value configured for the Docker container:

```text
serverName=php-tutorial
```

## 2. Configure Path Mappings

In the same server configuration, enable:

**Use path mappings**

Map the local `websites` directory to the directory used by PHP inside Docker:

| Local path           | Remote path        |
| -------------------- | ------------------ |
| `<project>/websites` | `/var/www/student` |

For example:

```text
C:\Projects\php-tutorial\websites
        ↕
/var/www/student
```

On macOS/Linux:

```text
/home/user/projects/php-tutorial/websites
        ↕
/var/www/student
```

### Why is the path mapping required?

Xdebug reports file paths from inside the Docker container.

For example, Xdebug may report:

```text
/var/www/student/index.php
```

PhpStorm needs to know that this file corresponds to:

```text
<project>/websites/index.php
```

Without the mapping, PhpStorm may receive the Xdebug connection successfully but cannot associate the breakpoint with the local source file.

## 3. Configure the Xdebug Port

Open:

**Settings → PHP → Debug**

Make sure the Xdebug debug port is:

```text
9003
```

This must match the Xdebug configuration:

```text
xdebug.client_port=9003
```

## 4. Start Listening for Debug Connections

In PhpStorm, enable:

**Run → Start Listening for PHP Debug Connections**

Alternatively, click the **phone/listening icon** in the PhpStorm toolbar.

PhpStorm must be listening before a PHP request is made.

## 5. Set a Breakpoint

Open a PHP file below the `websites` directory and set a breakpoint.

For example:

```text
websites/index.php
```

Click in the gutter next to a line of executable PHP code.

## 6. Start the Application

Open the application in your browser:

```text
http://localhost/
```

PhpStorm should receive the Xdebug connection and stop execution at the breakpoint.

## 7. Configuration Overview

The important PhpStorm configuration is:

```text
Server name:
php-tutorial

Host:
localhost

Port:
80

Debugger:
Xdebug

Path mapping:

<project>/websites
        ↕
/var/www/student

Xdebug port:
9003
```

The complete path mapping looks like this:

```text
Local machine                         Docker container

<project>/websites
        │
        │ Path mapping
        ▼
/var/www/student
        │
        ▼
     PHP/Apache
        │
        │ Xdebug
        ▼
     PhpStorm
```

## 8. Troubleshooting

### The debugger connects, but does not stop at breakpoints

Check:

1. PhpStorm is listening for PHP debug connections.
2. The breakpoint is in a PHP file inside the local `websites` directory.
3. The PhpStorm server is named exactly:

   ```text
   php-tutorial
   ```
4. The path mapping is exactly:

   ```text
   <project>/websites → /var/www/student
   ```
5. The Xdebug port is:

   ```text
   9003
   ```

### PhpStorm reports that a file cannot be found

This almost always indicates an incorrect **Path Mapping**.

For example, if PhpStorm reports:

```text
/var/www/student/index.php
```

make sure the server configuration maps:

```text
<project>/websites → /var/www/student
```

Do **not** map the project root directly to `/var/www/student` if the Docker volume is mounting the `websites` directory.

### Important

The following values are different things:

```text
Apache ServerName:
localhost

PhpStorm Server Name:
php-tutorial

PhpStorm Host:
localhost

Docker path:
/var/www/student

Local path:
<project>/websites
```

The **PhpStorm Server Name** must match the `serverName` used by `PHP_IDE_CONFIG`.

The **Host** can still be `localhost`.

 


# Debugging PHP in Visual Studio Code

This project is configured to support PHP debugging with **Xdebug** and **Visual Studio Code**.

Follow the steps below to enable debugging.

## 1. Install the PHP Debug extension

Open Visual Studio Code and go to the **Extensions** panel.

Search for:

**PHP Debug**

Install the PHP Debug extension by **Xdebug**.

## 2. Open the project

Open the **root folder of the project** in Visual Studio Code.

The project should have a structure similar to:

```text
project/
├── .vscode/
├── assignments/
├── colleges/
├── debugging/
├── Docker/
│   ├── webserver/
│   └── websites/
└── exams/
```

Make sure you open the **project root**, not the `Docker` or `websites` directory separately.

You can use:

**File → Open Folder...**

and select the project root.

## 3. Add the debugging configuration

A `launch.json` file is provided with the project.

Copy the provided `launch.json` into:

```text
.vscode/launch.json
```

If the `.vscode` directory does not exist, create it.

The resulting structure should be:

```text
project/
└── .vscode/
    └── launch.json
```

**Do not modify the provided `launch.json` unless instructed to do so.**

The configuration contains the required path mapping between your local project and the PHP container.

## 4. Start the debugger

Open the **Run and Debug** panel in Visual Studio Code.

Select:

```text
Listen for Xdebug
```

Then click **Start Debugging** or press:

```text
F5
```

Visual Studio Code is now listening for incoming Xdebug connections.

## 5. Set a breakpoint

Open a PHP file inside:

```text
Docker/websites/
```

For example:

```text
Docker/websites/examples/...
```

Click next to a line number to add a breakpoint.

A red dot should appear in the editor gutter.

Make sure the breakpoint is placed on a line containing executable PHP code.

## 6. Run the PHP application

With the debugger running, open the application in your browser:

```text
http://localhost/
```

When the PHP code reaches your breakpoint, Visual Studio Code should automatically pause execution.

You can then inspect:

* Variables
* Call stack
* Local scope
* Expressions
* The current line of execution

## 7. Debugging controls

When execution is paused, the debugging toolbar provides controls such as:

| Action    | Description                                        |
| --------- | -------------------------------------------------- |
| Continue  | Continue execution until the next breakpoint       |
| Step Over | Execute the current line and move to the next line |
| Step Into | Enter a function or method                         |
| Step Out  | Leave the current function or method               |
| Restart   | Restart the debugging session                      |
| Stop      | Stop the debugging session                         |

## Troubleshooting

### The breakpoint is not triggered

Check the following:

1. The **PHP Debug** extension is installed.
2. You opened the **project root** in Visual Studio Code.
3. The provided `launch.json` is located at:

   ```text
   .vscode/launch.json
   ```
4. **Listen for Xdebug** is running.
5. The breakpoint is inside a PHP file under:

   ```text
   Docker/websites/
   ```
6. The PHP application is being accessed through:

   ```text
   http://localhost/
   ```

### The debugger starts, but the breakpoint is not recognized

Do not change the path mapping in `launch.json` immediately.

The provided configuration is designed for the project structure described above. First check that you opened the **project root** rather than `Docker` or `Docker/websites` as the workspace.

For example, this is correct:

```text
project/
├── .vscode/
├── assignments/
├── colleges/
├── Docker/
└── exams/
```

This is incorrect:

```text
project/
└── Docker/
    ├── webserver/
    └── websites/
```

when `Docker` itself is opened as the VS Code workspace.

## Quick checklist

Before debugging, make sure:

* [ ] PHP Debug extension is installed
* [ ] The project root is open in VS Code
* [ ] `.vscode/launch.json` is present
* [ ] **Listen for Xdebug** is selected
* [ ] Debugging is started with **F5**
* [ ] A breakpoint is set in a PHP file
* [ ] The application is opened at `http://localhost/`

Once these steps are completed, Visual Studio Code should stop at PHP breakpoints and allow you to debug the application interactively.
