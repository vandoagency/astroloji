#!/usr/bin/env python3
import subprocess, json

def test():
    result = subprocess.check_output(['python3', 'astro_calc.py', '2023-01-01', '12:00', 'Istanbul'])
    data = json.loads(result)
    assert data['date'] == '2023-01-01'
    assert 'message' in data
    print('ok')

if __name__ == '__main__':
    test()
