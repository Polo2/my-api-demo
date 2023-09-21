#!/bin/sh

# Default values
default_url=https://localhost/docs.json
default_output_file_path="docs/openapi.json"

url="${1:-$default_url}"
output_file_path="${2:-$default_output_file_path}"

# Use curl to fetch the JSON data from the provided URL
json_data=$(curl -s -k "$url" | jq)

# Check if the curl command was successful
if [ $? -ne 0 ]; then
  echo "Failed to fetch JSON data from $url"
  exit 1
fi

# Write the JSON data to the specified output file
echo "$json_data" > "$output_file_path"

# Check if the write operation was successful
if [ $? -ne 0 ]; then
  echo "Failed to write JSON data to $output_file_path"
  exit 1
fi

echo "JSON data successfully copied from $url to $output_file_path"

# how to use it:
# bash docs/persist.sh "http://example.com.docs.json" "docs/test.json"
# or with default values: bash docs/persist.sh
