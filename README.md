# Cloud1 - Infrastructure Automation Project

## Overview
This project is an infrastructure automation solution using Ansible to set up and configure multiple systems. It provides a structured approach to system configuration, Docker deployment, and application management across different instances.

## Project Structure
```
cloud1/
├── ansible.cfg      # Ansible configuration file
├── config/          # Configuration role
├── copy/            # File copying role
├── core/            # Core functionality
├── docker/          # Docker installation and configuration role
├── group_vars/      # Group variables for Ansible
├── inventory.ini    # Target hosts inventory
├── keys/            # SSH and other authentication keys
├── Makefile         # Build and automation tasks
├── playbook.yaml    # Main Ansible playbook
└── run/             # Runtime execution role
```

## Features
- Automated system configuration
- Docker installation and setup
- File deployment and management
- Configurable runtime execution
- Support for multiple target instances (AWS and custom instances)

## Prerequisites
- Ansible installed on the control node
- SSH access to target instances
- Proper network connectivity to target instances
- Required SSH keys in the `keys/` directory

## Usage

### Setting up the Environment
1. Ensure all prerequisites are met
2. Configure your target instances in `inventory.ini`
3. Place necessary SSH keys in the `keys/` directory
4. Update group variables if needed in `group_vars/`

### Running the Playbook
```bash
ansible-playbook playbook.yaml -i inventory.ini
```

The playbook will execute the following roles in order:
1. `config`: Basic system configuration
2. `docker`: Docker installation and setup
3. `copy`: File deployment
4. `run`: Runtime execution

Each role includes retry logic (3 attempts with 5-second delays) to ensure reliable execution.

## Role Descriptions

### Config Role
- Handles basic system configuration
- Sets up necessary system parameters
- Configures base requirements

### Docker Role
- Installs Docker
- Configures Docker settings
- Sets up Docker service

### Copy Role
- Manages file deployments
- Copies necessary configurations
- Handles file permissions

### Run Role
- Executes runtime configurations
- Manages service startup
- Handles application deployment

## Target Instances
- `sehmus_instances`: Custom instance configuration
- `aws_instances`: AWS infrastructure management

## Maintenance
To update the project configuration:
1. Modify role-specific files in respective directories
2. Update inventory.ini for new instances
3. Adjust group variables as needed
4. Run the playbook to apply changes

## Contributing
1. Fork the repository
2. Create a feature branch
3. Submit a pull request

## Contact
https://github.com/Clas0512
https://github.com/berkayinam
